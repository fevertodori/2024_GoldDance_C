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
    //     Schema::create('products', function (Blueprint $table) {
    //                 $table->increments("product_id");
    //                 $table->string("product_name");
    //                 $table->integer("price");
    //                 $table->string("image");
    //                 $table->string("memo");
    //                 $table->boolean("course_flag") -> default("0");
    //                 $table->boolean("delete_flag") -> default("0");
    //                 $table->boolean("drink_free_flag") -> default("0");
    //                 $table->foreignId("category_id") -> nullable() -> constrained('categories') ;
    //                 $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('products_tablele');
    // }
};
