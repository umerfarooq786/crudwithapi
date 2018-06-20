<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Specaility;

class Technician extends Model
{
    public function Specaility()
    {
        return $this->belongsTo('Specaility','foreign_key');
    }
}
