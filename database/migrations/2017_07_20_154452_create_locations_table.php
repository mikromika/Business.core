<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('location_desc');
            $table->string('address');
            $table->string('postcode');
            $table->string('city');
            $table->string('municapality');
            $table->string('country');
            $table->string('ISOCode');
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
        Schema::dropIfExists('locations', function (Blueprint $table) {
            //
        });
    }
}
