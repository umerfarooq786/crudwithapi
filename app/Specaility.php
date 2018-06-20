<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Technician;

class Specaility extends Model
{
    public function technicians()
    {
        return $this->hasMany('Technician');
    }
}
