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
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE');
            $table->foreignId('category_id')->constrained('categories')->onDelete('CASCADE');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('time_to_read');
            $table->string('imageName');
            $table->string('imagePath');
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->string('score')->default(0);
            $table->longText('body');
            $table->enum('status', \modules\Rayium\Post\Models\Post::$statuses);
            $table->enum('type', \modules\Rayium\Post\Models\Post::$types)->default(\modules\Rayium\Post\Models\Post::TYPE_NORMAL);
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
