<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTaskPivotTable extends Migration
{
    public function up()
    {
        Schema::create('category_task', function (Blueprint $table) {
            $table->unsignedInteger('task_id');
            $table->foreign('task_id', 'task_id_fk_1434578')->references('id')->on('tasks')->onDelete('cascade');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id', 'category_id_fk_1434578')->references('id')->on('categories')->onDelete('cascade');
        });
    }
}
