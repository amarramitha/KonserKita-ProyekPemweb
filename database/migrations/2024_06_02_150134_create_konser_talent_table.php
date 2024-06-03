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
        Schema::create('konser_talent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konser_id');
            $table->unsignedBigInteger('talent_id');
            $table->timestamps();

            $table->foreign('konser_id')->references('id')->on('konsers')->onDelete('cascade');
            $table->foreign('talent_id')->references('id')->on('talents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konser_talent');
    }
};
