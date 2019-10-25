<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('email')->unique();
	    $table->bigInteger('mobile_number');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('pincode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
		Schema::table('user_details', function($table) {
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
