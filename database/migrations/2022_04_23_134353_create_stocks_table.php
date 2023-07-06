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
        Schema::create('stocks', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('stock_location_id');
            $table->unsignedDouble('quantity');
            $table->string('lote', 45);
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('stock_location_id')->references('id')->on('stock_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
