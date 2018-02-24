<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_relationship extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bp_relationship';

    protected $fillable = [
    	 'term_id','post_id','type'
    ];



    public function post()
    {
        return $this->belongsTo('BeyondPlus\CmsLibrary\Models\Bp_post');
    }


}
