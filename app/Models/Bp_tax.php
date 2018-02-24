<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_tax extends Model
{
    protected $primaryKey = 'tax_id';
    protected $table = 'bp_tax';

    protected $fillable = [
    	'tax_id','parent_id', 'tax_name','tax_icon', 'tax_desc', 'tax_lan', 'tax_dash' , 'tax_active', 'tax_created'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

}
