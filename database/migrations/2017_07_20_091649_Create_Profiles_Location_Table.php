<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_location', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('profile_id')->references('id')->on('profiles')->onDelete('cascade');
          $table->integer('location_id')->references('id')->on('locations')->onDelete('cascade');
          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles_location', function (Blueprint $table) {
            //
        });
    }
}
