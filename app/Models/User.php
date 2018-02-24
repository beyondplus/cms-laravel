<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'users';

    protected $fillable = [
    	'id','name', 'email','avatar','password','api_token', 'role', 'created_at'
    ];

    public function parent()
    {
        return $this->belongsTo('App\user', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\user', 'parent_id');
    }
}
