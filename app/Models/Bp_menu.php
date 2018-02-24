<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_menu extends Model
{
    protected $primaryKey = 'menu_id';
    protected $table = 'bp_menu';

    protected $fillable = [
    	 'menu_name','menu_link','post_id','menu_weight','menu_icon','parent_id' ,'menu_created','created_at','updated_at'
    ];

    public function Parent(){
    	return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Bp_menu', 'parent_id','menu_id');
    }

    public function Children()
    {
        return $this->hasMany('BeyondPlus\CmsLibrary\Models\Bp_menu','parent_id','menu_id');
    }

    public function Post()
    {
        return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Bp_post','post_id','id');
    }
}
