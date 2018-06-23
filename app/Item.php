<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function catogories()
    {
        return $this->belongsTo('App\Category','foreign_key');
    }
    public function brands()
    {
        return $this->hasMany('Brand');
    }
}
