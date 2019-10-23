<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('order_id')->unsigned();
            $table->string('txn_id');
			$table->float('total_cost');
 			$table->string('currency_code');
 			$table->string('payment_status');
            $table->timestamps();
        });
		Schema::table('payments', function($table) {
                $table->foreign('order_id')->references('id')->on('users_order')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
