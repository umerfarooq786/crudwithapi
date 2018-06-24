<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookService extends Model
{
    protected $fillable=['brand_name','item_name','fault','technician_id','dateOfBooking','timeOfBooking'];
    protected $primaryKey = "id";
}
