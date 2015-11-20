<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTabeV2 extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('trip_id');//->unsigned();
            $table->string('invoicingParty');
            $table->decimal('amountCHF');
            $table->timestamp('date');
            $table->text('note');
            $table->timestamps();
          


       
            // Because of technical issues the relationship has to be don manually in PHPMyAdmin
            //  $table->foreign('trip_id')->references('id')->on('trips'); //-> ondDelete('cascade'); */
        });

        /*  Schema::table('bills', function($table) {
          $table->foreign('trip_id')->references('id')->on('trips');
          }); // */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('bills');
    }

}
