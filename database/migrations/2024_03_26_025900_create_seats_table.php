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
    //     Schema::create('seats', function (Blueprint $table) {
    //                 $table->increments('seat_id');
    //                 $table->integer('seat_number');
    //                 $table->string('seat_type');
    //                 $table->integer('group_id');
    //                 $table->boolean('delete_flag') -> default('0');
    //                 $table->foreignId('store_id') -> nullable() -> constrained('stores');
    //                 $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('seats');
    // }
};
