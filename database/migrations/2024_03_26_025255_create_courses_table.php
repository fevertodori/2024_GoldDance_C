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
    //     Schema::create('courses', function (Blueprint $table) {
    //         $table -> increments("course_id");
    //         $table -> foreign("original_id") -> references('product_id') -> on('products');
    //         $table -> foreignId('product_id') -> nullable() -> constrained('products');
    //         $table -> boolean('delete_flag') -> default('0');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_tablele');
    }
};
