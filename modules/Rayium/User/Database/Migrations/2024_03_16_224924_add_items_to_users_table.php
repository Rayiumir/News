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
        Schema::table('users', function (Blueprint $table) {
            $table->string('telegram')->nullable()->unique();
            $table->string('linkedin')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->string('twitter')->nullable()->unique();
            $table->text('bio')->nullable();
            $table->string('imageName')->nullable();
            $table->string('imagePath')->nullable();
            $table->enum('status', \modules\Rayium\User\Models\User::$statuses)->default(\modules\Rayium\User\Models\User::STATUS_ACTIVE);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('telegram');
            $table->dropColumn('linkedin');
            $table->dropColumn('instagram');
            $table->dropColumn('twitter');
            $table->dropColumn('bio');
            $table->dropColumn('imageName');
            $table->dropColumn('imagePath');
            $table->dropColumn('status');
        });
    }
};
