<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnic');
            $table->string('email')->unique();
            $table->string('address');
            $table->boolean('status');
            $table->string('phone');
            $table->string('experience');
            $table->float('rating');
            $table->string('image');
            $table->integer('specaility_id')->unsigned()->index();
            $table->foreign('specaility_id')->references('id')->on('specailities');


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
        Schema::dropIfExists('technicians');
    }
}
