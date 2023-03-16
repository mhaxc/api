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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->Double('price')->nullable();
            $table->longText('description')->nullable();
            $table->string('color', 45)->nullable();
            $table->Double('quantity')->default(0);
            $table->Double('height')->default(0);
            $table->Double('width')->default(0);
            $table->Double('depth')->default(0);
            $table->Double('weight')->default(0);
            $table->unsignedInteger('category_id');
            $table->boolean('active')->nullable();
            $table->string('bulk_slug', 2);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('bulk_slug')->references('slug')->on('bulks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
