<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('job_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->string('color')->nullable();
            $table->string('allowed_status_transitions');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
