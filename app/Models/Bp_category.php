<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_category extends Model
{
    protected $primaryKey = 'category_id';
    protected $table = 'bp_taxes';

    protected $fillable = [
    	'category_id','category_name', 'parent_id','category_link','category_icon', 'category_dash', 'category_active'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Bp_post');
    }

    public function translate()
    {
        return $this->belongsTo('App\Models\Bp_tax','tax_id','translate_id');
    }

}
