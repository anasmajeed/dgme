<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unassigned();
            $table->string('profile_pic');
            $table->string('cnic_no');
            $table->string('user_grade');
            $table->string('user_type');
            $table->string('user_city');
            $table->string('user_address');
            $table->string('phone_no');
            $table->string('degree_file');
            $table->string('cnic_file');
            $table->string('cv_file');
            $table->string('age');
            $table->string('gross_salary');
            $table->string('net_salary');
            $table->string('gender');
            $table->rememberToken();
            $table->timestamps();
            // Foreign Keys
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_details');
    }
}
