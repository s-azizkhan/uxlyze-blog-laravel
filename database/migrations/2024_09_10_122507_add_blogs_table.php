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
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('blog_status')->default('draft');
            $table->text('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->longText('content')->nullable();
            $table->text('image')->nullable();
            $table->string('category')->nullable();
            $table->string('read_time')->nullable();
            $table->string('alt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
