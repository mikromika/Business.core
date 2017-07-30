<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_details', function (Blueprint $table) {
          // profile_id
          $table->increments('id');
          // uuid
          $table->string('uuid');
          $table->string('phone');
          $table->string('mobile');
          $table->string('email');
          $table->string('some_id');

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
        Schema::dropIfExists('profiles_details', function (Blueprint $table) {
            //
        });
    }
}
