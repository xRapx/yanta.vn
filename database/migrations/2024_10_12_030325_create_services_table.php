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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // description
            $table->text('description');
            // image
            $table->string('image')->nullable();
            // price
            $table->decimal('price', 10, 2);
            // features
            $table->text('features');
            // status
            $table->enum('status', ['active', 'inactive'])->default('active');
            // created_at and updated_at timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
