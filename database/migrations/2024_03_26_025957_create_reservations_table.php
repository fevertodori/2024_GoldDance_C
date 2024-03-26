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
    //     Schema::create('reservations', function (Blueprint $table) {
    //         $table->increments('reserve_id');
    //         $table->string('reserver');
    //         $table->date('start_time');
    //         $table->date('end_time');
    //         $table->integer('count');
    //         $table->integer('tell_number');
    //         $table->boolean('cancel_flag') -> default('0');
    //         $table->foreignId('seat_id') -> nullable() -> constrained('seats');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
