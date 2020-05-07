<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToJobsTable extends Migration
{
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->unsignedInteger('status_id');
            $table->foreign('status_id', 'status_fk_1434329')->references('id')->on('job_statuses');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_fk_1434330')->references('id')->on('users');
            $table->unsignedInteger('task_id');
            $table->foreign('task_id', 'task_fk_1434461')->references('id')->on('tasks');
        });
    }
}
