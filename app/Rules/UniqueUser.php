<?php

namespace App\Rules;

use App\User\ManangerUser;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueUser implements Rule
{
    protected $table, $value, $collumn;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(string $table, $value = null, $collumn = 'id')
    {
        $this->table = $table;
        $this->value = $value;
        $this->collumn = $collumn;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       $userId = auth()->user()->id;;
       $register = DB::table($this->table)
                        ->where($attribute, $value)
                        ->where('user_id', $userId)
                        ->first();

        if($register && $register->{$this->collumn} == $this->value)
            return true;
        
        return is_null($register);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Já existe um registro com esse nome';
    }
}
