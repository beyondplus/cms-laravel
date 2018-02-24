<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'news';

    protected $fillable = [
        'id','title','body','aktif','created_by'
    ];
}
