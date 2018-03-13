<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_relationship extends Model
{
	protected $table = 'bp_relationships';
    protected $primaryKey = 'id';
   	public $timestamps = false;

    protected $fillable = [
    	 'tax_id','post_id','type'
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Bp_post');
    }


}
