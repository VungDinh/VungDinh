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
        Schema::create('qlct', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('Date')->nullable();
            $table->string('Money')->nullable();
            $table->longText('Note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qlct');
    }
};
