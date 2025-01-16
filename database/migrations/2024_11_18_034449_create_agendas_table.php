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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('tempat');
            $table->string('slug');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('cat_id')->on('agenda_categories')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
