<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'user_name',
        'first_name',
        'last_name',
        'gender',
        'email',
        'marital_status',
        'role_id',
        'date_of_birth',
        'phone',
        'password',
        'password_token',
        'remember_token',
        'place_of_birth',
        'profile',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
