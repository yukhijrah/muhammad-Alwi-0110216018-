<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table='post';

    protected $fillable = [
        'title', 'content', 'image', 'author'
    ];
}
