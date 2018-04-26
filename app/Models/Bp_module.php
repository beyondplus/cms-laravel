<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Bp_module extends Model
{
    protected $primaryKey = 'module_id';
    protected $table = 'bp_modules';
    protected $fillable = [
         'module_name','module_name_mm','module_link','module_weight', 'module_icon', 'parent_id','staff_id', 'section','created_at','updated_at'
    ];

    public function accesss() {
        return $this->belongsTo('App\Models\Bp_access','module_id','module_id');
    }

    public function child() {
        return $this->hasMany('App\Models\Bp_module','parent_id');
    }

}