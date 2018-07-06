<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitingofficersTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitingofficers__trips', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('trip_id')->unassigned();
            $table->integer('user_id')->unassigned();
            $table->integer('visitingofficer_id')->unassigned();
            $table->timestamps();
            // Foreign Keys
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->dropForeign(['trip_id']);
            $table->foreign('trip_id')
                ->references('id')->on('trips')
                ->onDelete('no action')
                ->onUpdate('no action');
                // Foreign Keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
                // Foreign Keys
            $table->foreign('visitingofficer_id')->references('id')->on('users');
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitingofficers__trips');
    }
}
