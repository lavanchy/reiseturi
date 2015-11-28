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
            $table->text('note');$table->integer('booking_id')->unsigned()->index();
            $table->integer('trip_id')->unsigned()->index();
        });  //*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('bookings');
       
    }

}
