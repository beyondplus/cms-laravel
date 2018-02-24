<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_custom extends Model
{
    protected $primaryKey = 'custom_id';
    protected $table = 'bp_custom';

    protected $fillable = [
    	 'custom_name','custom_link','custom_weight','custom_icon','parent_id' ,'custom_created','created_at','updated_at'
    ];

    public function Parent(){
    	return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Bp_custom', 'parent_id','custom_id');
    }

    public function Children()
    {
        return $this->hasMany('BeyondPlus\CmsLibrary\Models\Bp_custom','parent_id','custom_id');
    }

 
}
