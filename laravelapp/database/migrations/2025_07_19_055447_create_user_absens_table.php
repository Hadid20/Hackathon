<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_absens', function (Blueprint $table) {
            $table->id();
            $table->text('foto');
            $table->string('nama');
            $table->string('shift');
            $table->string('status');
            $table->string('alasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_absens');
    }
};
