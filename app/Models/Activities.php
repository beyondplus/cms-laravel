<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_post extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bp_post';

    protected $fillable = [
    	 'id','title', 'body','post_name' , 'user_id' ,'view','created_at', 'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Category');
    }



    public function users()
    {
        return $this->hasMany('App\Models\User','id', 'user_id');
    }


}
