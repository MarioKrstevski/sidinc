<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('wallet_id')->nullable();
            $table->foreign('wallet_id', 'wallet_fk_1434581')->references('id')->on('wallets');
        });
    }
}
