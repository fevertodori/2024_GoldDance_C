<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('orders', function (Blueprint $table) {
    //         $table->increments('order_id');
    //         $table->integer('order_count');
    //         $table->integer('order_price');
    //         $table->foreignId("seat_id") -> nullable() -> constrained('seats');
    //         $table->foreignId("product_id") -> nullable() -> constrained('products');
    //         $table->foreignId("group_id") -> nullable() -> constrained('seats');
    //         $table->boolean('delete_flag') -> default('0');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('orders');
    // }
};
