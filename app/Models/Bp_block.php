<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_block extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bp_block';

    protected $fillable = [

         'title', 'body','block_active','translate_id','staff_id','lang','created_at'

    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }


    public function translate()
    {
        return $this->belongsTo('App\Models\Bp_post','id','translate_id');
    }
}
