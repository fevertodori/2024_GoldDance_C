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
    //     Schema::create('stores', function (Blueprint $table) {
    //         $table->increments('store_id');
    //         $table->string('store_name');
    //         $table->string('mail');
    //         $table->string('password');
    //         $table->boolean('headquarters_flag') -> default('0');
    //         $table->boolean('delete_flag') -> default('0');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores_tablele');
    }
};
