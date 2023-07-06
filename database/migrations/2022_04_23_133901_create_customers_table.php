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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('document', 20);
            $table->string('email', 45);
            $table->string('postal_code', 45);
            $table->string('address', 100)->nullable();
            $table->string('neighborhood', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('number', 15)->nullable();
            $table->string('state', 2)->nullable();
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
        Schema::dropIfExists('customers');
    }
};
