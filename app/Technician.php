<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specaility;

class Technician extends Model
{
    public function specaility()
    {
        return $this->belongsTo('Specaility','foreign_key');
    }
}
