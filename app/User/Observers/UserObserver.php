<?php
namespace App\User\Observers;

use App\User\ManangerUser;
use Illuminate\Database\Eloquent\Model;

class UserObserver{

     /**
     * Handle the model "creating" event.
     *
     * @param  \App\Model
     * @return void
     */
    public function creating(Model $model)
    {
        $manangerUser = app(ManangerUser::class);
        $model->user_id = $manangerUser->getUserIdentify();
    }

}
