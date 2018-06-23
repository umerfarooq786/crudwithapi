<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function items()
    {
        return $this->belongsTo('App\Item','foreign_key');
    }
}
