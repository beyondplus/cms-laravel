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
        'name', 'email','role','password'
    ];


    public function access() {
        return $this->belongsTo('App\Models\Bp_access','access_id');
    }

}