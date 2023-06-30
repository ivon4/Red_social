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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            #$table->foreignId('post_id')->constrained('posts');
            $table->unsignedBigInteger('post_id');
            #$table->foreignId("post_id")->constrained()->cascadeOnDelete();
            $table->foreign("post_id")->references("id")->on("posts"); 
            $table->string("comentario");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
