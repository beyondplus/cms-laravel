<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_post extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bp_posts';

    protected $fillable = [

         'title', 'body','featured','featured_img','post_link','post_type', 'post_template','post_weight','post_active','translate_id','staff_id','lang','created_at'

    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Bp_tax');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Bp_tax', 'bp_relationships' ,'post_id','tax_id');
    }

    public function translate()
    {
        return $this->belongsTo('App\Models\Bp_post','id','translate_id');
    }
}
