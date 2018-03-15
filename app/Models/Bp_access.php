<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_access extends Model
{
    protected $primaryKey = 'access_id';
    protected $table = 'bp_access';
    public $timestamps = false;

    protected $fillable = [
    	'module_id','user','staff', 'admin','superadmin'
    ];

    public function module() {
    	return $this->belongsTo('App\Models\Bp_module','module_id');
    }

}
