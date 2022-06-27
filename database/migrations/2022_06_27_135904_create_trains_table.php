<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 30)->nullable(false);
            $table->string('departures_station', 30)->nullable(false);
            $table->string('arrival_station', 30)->nullable(false);
            $table->time('departures_hour', 0)->nullable(false);
            $table->time('arrival_hour', 0)->nullable(false);
            $table->UnsignedSmallInteger('train_code')->nullable(false);
            $table->UnsignedTinyInteger('wagons')->nullable(false);
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
