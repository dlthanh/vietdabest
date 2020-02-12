<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class Manager extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    protected $guard = 'manager';

    protected $fillable = [
        'name', 'display_name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
