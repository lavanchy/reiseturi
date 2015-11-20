<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookings2Tbl extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('countPasanger');
            $table->decimal('price');
            $table->string('paymentTyp');
            $table->string('paymentStatus');
            $table->text('note');
        });  //*/



     
        Schema::create('bookings_trip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->unsigned()->index();
            $table->integer('trip_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('bookings');
        Schema::drop('bookings_trip');
    }

}
