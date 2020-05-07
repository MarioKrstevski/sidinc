<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTaskPivotTable extends Migration
{
    public function up()
    {
        Schema::create('tag_task', function (Blueprint $table) {
            $table->unsignedInteger('task_id');
            $table->foreign('task_id', 'task_id_fk_1434579')->references('id')->on('tasks')->onDelete('cascade');
            $table->unsignedInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_1434579')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
