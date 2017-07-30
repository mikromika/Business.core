<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
          // profile_id
          $table->increments('id');
          // link to user table
          $table->integer('user_id');

          $table->string('nick_name');
          $table->timestamp('last_login')->nullable();
          $table->integer('status_id');
          //
          $table->string('image_path');
          $table->integer('image_id');
          $table->string('profile_type');
          $table->timestamps();

          // uuid unique
          $table->string('uuid');
          $table->string('first_name');
          $table->string('middle_name');
          $table->string('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles', function (Blueprint $table) {
            //
        });
    }
}
