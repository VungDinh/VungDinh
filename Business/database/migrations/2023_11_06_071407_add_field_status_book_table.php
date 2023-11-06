<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('book_tables', function (Blueprint $table) {
            $table->enum('status', ['complete', 'waiting', 'cancel'])->default('waiting');
        });
    }

    public function down()
    {
        Schema::table('book_tables', function (Blueprint $table) {
            $table->dropColumn(['status']);
        });
    }
};
