<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('region_id', 10);
            $table->string('nama_sls')->nullable();
            $table->string('kode_pos', 5)->nullable();
            $table->string("kbli", 5)->nullable();
            $table->longText("alamat_lengkap")->nullable();
            $table->longText("location")->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('nama_komersial')->nullable();
            $table->string('no_telp', 18)->nullable();
            $table->string('no_wa', 18)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->text('kegiatan_usaha')->nullable();
            $table->string('kategori')->nullable();
            $table->string('produk_utama')->nullable();
            $table->string('sumber_data')->nullable();

            $table->char('docState', 1)->default('E');
            $table->integer('submit_status')->default(2);
            $table->date('updated_at')->nullable()->default(Date::now());
            $table->date('created_at')->nullable()->default(Date::now());
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_responses');
    }
};
