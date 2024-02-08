<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetrajetTable extends Migration
{
    public function up()
    {
        Schema::create('trajet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->nullable()->constrained('drivers')->onDelete('cascade');
            $table->foreignId('departure_city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('destination_city_id')->constrained('cities')->onDelete('cascade');
            $table->string('car_type')->nullable();
            $table->unsignedBigInteger('passenger_id')->nullable(); // New column to store the passenger ID
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trajet');
    }
}
