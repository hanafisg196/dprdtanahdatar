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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->string('slug', 200)->unique();
            $table->string('description', 200)->nullable();
            $table->string('keyword', 200)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('headline')->default(0);
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();

            $table->foreign("cat_id")->on("categories")->references("id");
            $table->foreign("user_id")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
