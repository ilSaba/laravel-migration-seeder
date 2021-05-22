<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 50)->nullable(); //Destination
            $table->tinyInteger('fly') -> unsigned ()->default(1); //Fly
            $table->tinyInteger('luggage') -> unsigned ()->default(1); //Luggage
            $table->decimal('amount', 6, 2)->nullable(); //Price
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
        Schema::dropIfExists('trip');
    }
}
