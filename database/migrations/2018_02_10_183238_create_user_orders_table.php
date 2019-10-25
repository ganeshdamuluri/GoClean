<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOrdersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
            Schema::create('users_order', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
//                $table->string('package');
                $table->dateTime('booking_date');
                $table->string('booking_time');
                $table->string('message');
                $table->timestamps();
            });
            Schema::table('users_order', function($table) {
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_orders');
    }

}
