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
        Schema::create('soal_ipa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->string('name_user');
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('soal_3');
            $table->string('soal_4');
            $table->string('soal_5');
            $table->string('soal_6');
            $table->string('soal_7');
            $table->string('soal_8');
            $table->string('soal_9');
            $table->string('soal_10');
            $table->integer('value_result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_ipa');
    }
};
