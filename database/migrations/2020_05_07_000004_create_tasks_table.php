<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('reward_amount', 15, 2);
            $table->datetime('deadline')->nullable();
            $table->integer('max_enrolled')->nullable();
            $table->integer('importance')->nullable();
            $table->string('active')->nullable();
            $table->date('scheduled_at')->nullable();
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
