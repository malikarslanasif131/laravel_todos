<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Associates todos with users
            $table->string('title');
            $table->boolean('completed')->default(false);
            $table->date('add_date'); // Date when the task is added
            $table->time('start_time')->nullable(); // Task start time
            $table->time('complete_time')->nullable(); // Task completion time
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
