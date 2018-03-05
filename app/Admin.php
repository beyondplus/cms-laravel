<?php

namespace App;

use Illuminate\Foundation\Auth\User as AdminAuthenticatable;

class Admin extends AdminAuthenticatable
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $primaryKey = 'id';
    protected $table = 'users';
    
    protected $fillable = [
        'username', 'email','password'
    ];

}