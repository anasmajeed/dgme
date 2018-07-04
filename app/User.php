<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
=======
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a0a21b84f5c29d590918fd2552f2e44a313e876

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD
=======
    use HasRoleAndPermission;
>>>>>>> 5a0a21b84f5c29d590918fd2552f2e44a313e876

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
