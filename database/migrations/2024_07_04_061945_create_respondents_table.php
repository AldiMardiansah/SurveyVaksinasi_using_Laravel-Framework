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
        Schema::create('respondents', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); //fk
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade'); //relasi
            $table->string('name');
            $table->string('address');
            $table->string('gender');
            $table->integer('age');
            $table->string('status');
            $table->string('doses'); //jumlah telah di vaksin
            $table->string('vaccine'); //jenis vaksin-vaksin covid-19
            $table->string('effects'); //efek samping penggunaan vaksin
            $table->string('medical_history'); //riwayat penyakit yg dialami
            $table->string('importance'); //skala pentingnya divaksin
            $table->string('info_sufficiency'); //informasi kelengkapan ttg vaksin
            $table->string('service_rate'); //skala pelayanan yang dialami
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondents');
    }
};
