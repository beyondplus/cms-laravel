<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bp_slider extends Model
{
    protected $primaryKey = 'slider_id';
    protected $table = 'bp_slider';

    protected $fillable = [
    	 'slider_name','slider_link','slider_weight','slider_description','slider_created','created_at','updated_at'
    ];



}
