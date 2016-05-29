<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function kategorija()
    {
        return $this->belongsTo('App\Category', 'id_kategorije', 'id_kategorija');
    }
}