<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_inspections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_id')->unsigned();
            $table->string('vehicle_manufacturer');
            $table->string('vehicle_model');
            $table->string('vehicle_number');
            $table->string('vehicle_color');
            $table->timestamps();
        });
		Schema::table('vehicle_inspections', function($table) {
                $table->foreign('vehicle_id')->references('id')->on('vehicle_details')->onUpdate('cascade')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_inspections');
    }
}
