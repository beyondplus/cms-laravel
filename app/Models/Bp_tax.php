<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_tax extends Model
{
    protected $primaryKey = 'tax_id';
    protected $table = 'bp_taxes';

    protected $fillable = [
    	'tax_id','parent_id', 'tax_name','tax_link','tax_icon', 'tax_lan', 'tax_type', 'tax_dash' , 'tax_active', 'tax_created'
    ];
    
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Bp_post','post_id','id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Bp_post', 'bp_relationships' ,'tax_id','post_id');
    }

}
