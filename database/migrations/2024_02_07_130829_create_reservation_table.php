<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    public function up()
    {
        Schema::create('reserv', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            // $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade');
            $table->foreignId('trajet_Id')->constrained('trajet')->onDelete('cascade');
            // $table->foreignId('destination_city_id')->constrained('cities_models')->onDelete('cascade');
            // $table->timestamp('departure_time')->nullable();
            // $table->unsignedBigInteger('taxi_id')->nullable(); // Reference the driver's taxi
            // $table->string('car_type')->nullable();
            $table->timestamps();

            // Add foreign key constraint for the taxi_id column
            // $table->foreign('taxi_id')->references('id')->on('drivers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reserv');
    }
}
