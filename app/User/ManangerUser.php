<?php

namespace App\User;

use App\Models\User;

class ManangerUser{

    public function getUserIdentify(){
        return auth()->user()->id;
    }

    public function getUser(): User
    {
        return auth()->user;
    }

}