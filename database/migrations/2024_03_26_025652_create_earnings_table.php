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
    //     Schema::create('earnings', function (Blueprint $table) {
    //         $table->increments('earning_id');
    //         $table->integer('total');
    //         $table->date('date');
    //         $table->string('day');
    //         $table->foreignId("store_id") -> nullable() -> constrained('stores');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earnings');
    }
};
