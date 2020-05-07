<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgeUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('badge_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_1434580')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('badge_id');
            $table->foreign('badge_id', 'badge_id_fk_1434580')->references('id')->on('badges')->onDelete('cascade');
        });
    }
}
