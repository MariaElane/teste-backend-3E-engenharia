<?php

namespace App\Models;

use App\User\Traits\UserTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use UserTrait;

    protected $fillable = ['name','description'];

  

    public function search ($filter = null){
        $results = $this->where('name', 'LIKE', "%{$filter}%")
                       ->orWhere('description', 'LIKE', "%{$filter}%")
                       ->paginate();
        return $results;
    }

    public function products(){
       return $this->belongsToMany(Product::class);
    }
}
