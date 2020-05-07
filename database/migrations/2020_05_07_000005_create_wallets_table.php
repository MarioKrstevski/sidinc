<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('credit_card')->unique();
            $table->decimal('current_amount', 15, 2);
            $table->decimal('checkout_amount', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
