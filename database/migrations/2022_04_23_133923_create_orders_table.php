<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number')->nullable();
            $table->unsignedInteger('users_id');
            $table->date('date')->nullable();
            $table->string('type',1)->nullable();
            $table->string('status',1)->nullable();
            $table->string('customer_id');
            $table->string('observation', 200)->nullable();
            $table->unsignedInteger('type_payment_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('type_payment_id')->references('id')->on('type_payments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
