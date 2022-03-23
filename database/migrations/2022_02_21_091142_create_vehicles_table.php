<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('vehicle_type');
            $table->string('brand');
            $table->string('make');
            $table->string('usage');
            $table->string('name');
            $table->string('year');
            $table->string('millage')->nullable();
            $table->string('colour');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('engine_number')->nullable();
            $table->string('number_of_gear');
            $table->string('drive_type');
            $table->string('body_style');
            $table->string('number_of_door');
            $table->string('horse_type')->nullable();
            $table->string('location');
            $table->mediumText('description');
            $table->string('video_url')->nullable();
            $table->boolean('approved')->default('0');
            $table->boolean('featured')->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
