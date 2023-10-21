<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2); // Decimal for the price, adjust according as needed.
            $table->integer('stock');
            $table->decimal('discount', 5, 2); // Decimal for the discount, adjust according as needed.
            $table->string('size');
            $table->string('image')->nullable(); // The image is not necessary to create a product.
            
            // Foreign key for the relationship with the "categories" table.
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
