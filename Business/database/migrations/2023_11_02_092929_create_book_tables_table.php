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
        Schema::create('book_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('date', 250)->nullable();
            $table->string('time', 250)->nullable();
            $table->integer('people')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tables');
    }
};
