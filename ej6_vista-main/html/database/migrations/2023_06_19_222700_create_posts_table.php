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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            #$table->foreignId('user_id')->constrained('users');
            #$table->unsignedBigInteger('user_id');
            $table->foreign("id")->references("id")->on("users");
            #$table->foreignId("user_id")->refresh('id')->on('users');
            
            $table->string('publicacion')->nullable(false);
            $table->string('lenguaje')->nullable(false);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
