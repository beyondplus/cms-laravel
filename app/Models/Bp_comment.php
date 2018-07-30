<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_comment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'Bp_comment';

    protected $fillable = [
    	 'id', 'post_id','user_id','body','active','created_at','updated_at'
    ];

  	public function users()
    {
        return $this->hasMany('App\Models\User','id', 'user_id');
    }
}
