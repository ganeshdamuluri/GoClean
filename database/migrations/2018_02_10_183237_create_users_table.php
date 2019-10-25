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
            $table->string('google_id')->nullable();
	    $table->integer('role_id')->unsigned();
            $table->string('email')->unique();
	    $table->bigInteger('mobile_number')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
		Schema::table('users', function($table) {
                $table->foreign('role_id')->references('id')->on('user_roles')->onUpdate('cascade')->onDelete('cascade');
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
    }
}
