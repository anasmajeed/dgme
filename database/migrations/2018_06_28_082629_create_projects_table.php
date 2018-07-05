<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('proj_no')->unique();
          $table->date('starting_date');
          $table->date('ending_date');
          $table->string('planned_start_date');
          $table->integer('sponsor_agency_id')->unassigned();
          $table->integer('project_type_id')->unassigned();
          $table->integer('executing_agency_id')->unassigned();
          $table->integer('created_by')->unassigned();
          $table->timestamps();
          // Foreign keys
          $table->foreign('sponsor_agency_id')->references('id')->on('sponsor_agencies');
          $table->dropForeign(['sponsor_agency_id']);
          $table->foreign('sponsor_agency_id')
              ->references('id')->on('sponsor_agencies')
              ->onDelete('no action')
              ->onUpdate('no action');
          $table->foreign('project_type_id')->references('id')->on('project_types');
          $table->dropForeign(['project_type_id']);
          $table->foreign('project_type_id')
              ->references('id')->on('project_types')
              ->onDelete('no action')
              ->onUpdate('no action');
          $table->foreign('executing_agency_id')->references('id')->on('executing_agencies');
          $table->dropForeign(['executing_agency_id']);
          $table->foreign('executing_agency_id')
              ->references('id')->on('executing_agencies')
              ->onDelete('no action')
              ->onUpdate('no action');
          $table->foreign('created_by')->references('id')->on('users');
          $table->dropForeign(['created_by']);
          $table->foreign('created_by')
              ->references('id')->on('users')
              ->onDelete('no action')
              ->onUpdate('no action');
      });

      Schema::create('project_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('project_id')->unassigned();
          $table->double('total_cost');
          $table->double('capital_cost');
          $table->double('revenue_cost');
          $table->string('country');
          $table->string('city');
          $table->string('address');
          $table->double('SNE_cost');
          $table->integer('SNE_staff');
          $table->boolean('SNE_both');
          $table->boolean('q_c')->default(0);
          $table->integer('verified_by')->unassigned();
          $table->timestamps();
          // Foreign Keys
          $table->foreign('project_id')->references('id')->on('projects');
          $table->dropForeign(['project_id']);
          $table->foreign('project_id')
              ->references('id')->on('projects')
              ->onDelete('cascade')
              ->onUpdate('cascade');
          $table->foreign('verified_by')->references('id')->on('users');
          $table->dropForeign(['verified_by']);
          $table->foreign('verified_by')
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
        Schema::dropIfExists('project_details');
        Schema::dropIfExists('projects');
        
    }
}
