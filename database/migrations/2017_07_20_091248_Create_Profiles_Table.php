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
          
          // uuid unique
          $table->string('uuid')->nullable();
          $table->string('firstname');
          $table->string('middlename')->nullable();
          $table->string('lastname');
        //
          $table->string('nickname')->nullable();
          $table->timestamp('last_login')->nullable();
          $table->integer('status_id')->nullable();
          //
          $table->string('image_path')->nullable();
          $table->integer('image_id')->nullable();
          $table->string('profile_type')->nullable();
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
        Schema::dropIfExists('profiles', function (Blueprint $table) {
            //
        });
    }
}
