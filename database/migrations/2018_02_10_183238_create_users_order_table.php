<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersOrderTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (!Schema::hasTable('users_order')) {
            Schema::create('users_order', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->string('vehicle_type');
                $table->string('package');
                $table->string('services');
                $table->bigInteger('mobile_number');
                $table->string('address');
                $table->string('vehicle_make');
                $table->string('vehicle_model');
                $table->dateTime('booking_date');
                $table->string('vehicle_registration_number');
                $table->string('vehicle_color');
                $table->string('booking_time');
                $table->string('message');
                $table->timestamps();
            });
            Schema::table('users_order', function($table) {
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_details');
    }

}
