<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained();

            $table->smallInteger('number');
            $table->string('text');

            $table->boolean('sajda')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verses');
    }
};
