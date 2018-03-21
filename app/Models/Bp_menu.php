<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_menu extends Model
{
    protected $primaryKey = 'menu_id';
    protected $table = 'bp_menus';

    protected $fillable = [
         'menu_name','menu_link','post_id','menu_weight','menu_icon','parent_id' ,'menu_type','lang', 'translate_id','staff_id','created_at','updated_at'
    ];

    public function setMenulinkAttribute($value){
        $this->attributes['menu_link'] = str_replace(' ', '-', strtolower($value));
    }

    public function Parent(){
        return $this->belongsTo('App\Models\Bp_menu', 'parent_id','menu_id');
    }

    public function Children()
    {
        return $this->hasMany('App\Models\Bp_menu','parent_id','menu_id');
    }

    public function Post()
    {
        return $this->belongsTo('App\Models\Bp_post','post_id','id');
    }

    public function translate()
    {
        return $this->belongsTo('App\Models\Bp_menu','menu_id','translate_id');
    }
}
