<?php
namespace App\User\Traits;

use App\User\Observers\UserObserver;
use App\User\Scopes\UserScope;

trait UserTrait{

    protected static function booted(){
        parent::boot();

        static::observe(UserObserver::class);
        static::addGlobalScope(new UserScope);

    }
}