<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand_name');
            $table->string('item_name');
            $table->string('fault');
            $table->integer('technician_id')->unsigned()->index();
            $table->foreign('technician_id')->references('id')->on('technicians');
            $table->date('dateOfBooking');
            $table->time('timeOfBooking');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_services');
    }
}
