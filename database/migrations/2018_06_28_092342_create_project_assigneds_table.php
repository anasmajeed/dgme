<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAssignedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_assigned', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unassigned();
            $table->date('assigned_date');
            $table->integer('user_id')->unassigned();
            $table->date('completion_date')->nullable();
            $table->timestamps();
            // Foreign Keys
            $table->foreign('project_id')->references('id')->on('projects');
            $table->dropForeign(['project_id']);
            $table->foreign('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users');
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_assigneds');
    }
}
