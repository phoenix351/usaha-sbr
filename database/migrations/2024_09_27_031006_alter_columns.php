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
        Schema::table('responses', function (Blueprint $table) {
            $table->string('r115')->nullable()->change();
            $table->string('r301A')->nullable()->change();
            $table->integer('r302')->nullable()->change();
            $table->string('r303')->nullable()->change();
            $table->string('r304')->nullable()->change();
            $table->string('r305')->nullable()->change();
            $table->string('r306A')->nullable()->change();
            $table->string('r307A')->nullable()->change();
            $table->string('r308')->nullable()->change();
            $table->string('r309A')->nullable()->change();
            $table->string('r310')->nullable()->change();
            $table->string('hasil_kunjungan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
