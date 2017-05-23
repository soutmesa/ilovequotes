<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    // use Notifiable;
    use EntrustUserTrait;

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
        'date_of_birth',
        'phone',
        'password',
        'password_token',
        'remember_token',
        'place_of_birth',
        'profile',
    ];

    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }

    public function setPasswordTokenAttribute($password_token)
    {
        return $this->attributes['password_token'] = $this->attributes['password'];
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
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
