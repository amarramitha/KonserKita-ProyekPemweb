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
        Schema::create('syaratketentuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konser_id');
            $table->foreign('konser_id')->references('id')->on('konsers')->onDelete('cascade');
            $table->text('syaratketentuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syaratketentuans');
    }
};
