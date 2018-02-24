<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_post extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bp_post';

    protected $fillable = [

    	 'title', 'body','post_link','post_type','post_weight','post_active','post_created','created_at'

    ];


    public function category()
    {
        return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Category');
    }

    public function categories()
    {
        return $this->belongsToMany('BeyondPlus\CmsLibrary\Models\Bp_category', 'bp_relationship' ,'post_id', 'post_id');
    }


}
