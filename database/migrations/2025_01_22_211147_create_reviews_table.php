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
        Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('music_id');
        $table->text('content');
        $table->unsignedTinyInteger('rating'); // 1 to 5 stars
        $table->timestamps();

        // 外部キー制約
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
