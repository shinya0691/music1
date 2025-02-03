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
        Schema::table('music', function (Blueprint $table) {
            
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');   
            
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('musics', function (Blueprint $table) {
            //
        });
    }
};
