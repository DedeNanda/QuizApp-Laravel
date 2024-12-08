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
        Schema::create('info_passed', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_soal_ipa')->constrained('soal_ips')->onDelete('cascade');
            $table->foreignId('id_soal_ips')->constrained('soal_ipa')->onDelete('cascade');
            $table->string('name_users');
            $table->integer('value_result');
            $table->string('category_result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_passed');
    }
};
