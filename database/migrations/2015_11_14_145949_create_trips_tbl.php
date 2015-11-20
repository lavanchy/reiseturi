<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
   
            $table->timestamps();
            $table->string('destination');
            $table->timestamp('startDate');
            $table->timestamp('endDate');
            $table->decimal('preis');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void 
     */
    public function down()
    {
        Schema::drop('trips');
    }
}
