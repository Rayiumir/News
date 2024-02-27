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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE');
            $table->foreignId('comment_id')->nullable()->constrained('comments')->onDelete('set null');
            $table->longText('body');
            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type', 80);
            $table->enum('status', \modules\Rayium\Comment\Models\Comment::$statuses);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
