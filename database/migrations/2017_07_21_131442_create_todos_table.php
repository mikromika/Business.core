<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     *
     * Todos acting like subtasks.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('uuid');
            $table->integer('user_id');
            //$table->interger('memo_id');
            //$table->interger('note_id');
            $table->string('title');
            //$table->interger('category_id');
            //$table->interger('tag_id');
            $table->integer('priority');
            $table->integer('status_id');
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
        Schema::dropIfExists('todos');
    }
}
