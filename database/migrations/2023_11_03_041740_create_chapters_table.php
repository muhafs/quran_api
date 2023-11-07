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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('juz_id')->constrained();
            $table->foreignId('hizb_id')->constrained();

            $table->tinyInteger('number');
            $table->string('name');

            $table->smallInteger('number_of_verses');
            $table->enum('revelation', ['MC', 'MD'])->default('MD');

            $table->tinyInteger('sequence');
            $table->boolean('has_sajda')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
