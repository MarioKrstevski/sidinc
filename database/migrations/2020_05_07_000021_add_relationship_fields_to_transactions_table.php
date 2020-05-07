<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTransactionsTable extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedInteger('wallet_id');
            $table->foreign('wallet_id', 'wallet_fk_1434415')->references('id')->on('wallets');
            $table->unsignedInteger('task_id');
            $table->foreign('task_id', 'task_fk_1434469')->references('id')->on('tasks');
        });
    }
}
