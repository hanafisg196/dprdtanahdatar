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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->longText('thumbnail')->nullable();
            $table->unsignedBigInteger('news_id')->nullable();
            $table->unsignedBigInteger('article_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->foreign("news_id")->on("news")->references("id")->onDelete('set null');
            $table->foreign("article_id")->on("articles")->references("id")->onDelete('set null');
            $table->foreign("user_id")->on("users")->references("id")->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
