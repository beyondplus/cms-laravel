<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use  Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   // protected $table = 'Users';

    protected $fillable = [
         'name', 'email', 'avatar', 'role', 'password','api_token', 'verified','created_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

}
