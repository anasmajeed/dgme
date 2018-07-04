<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectRemarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_remarks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('remarks');
            $table->integer('project_id')->unassigned();
            $table->integer('frm_user_id')->unassigned();
            $table->integer('to_user_id')->unassigned();
            $table->integer('mute')->default();
            $table->timestamps();
            // Foreign Keys
            $table->foreign('frm_user_id')->references('id')->on('users');
            $table->dropForeign(['frm_user_id']);
            $table->foreign('frm_user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('to_user_id')->references('id')->on('users');
            $table->dropForeign(['to_user_id']);
            $table->foreign('to_user_id')
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
        Schema::dropIfExists('project_remarks');
    }
}
