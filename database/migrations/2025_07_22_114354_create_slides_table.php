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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable(); // store image path
            $table->string('heading');
            $table->text('description')->nullable();
            $table->string('button1_text')->nullable();
            $table->string('button1_link')->nullable();
            $table->string('button2_text')->nullable();
            $table->string('button2_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
