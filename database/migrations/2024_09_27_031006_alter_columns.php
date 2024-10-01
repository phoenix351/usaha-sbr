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
            $table->string('r501A')->nullable()->change();
            $table->string('hasil_kunjungan')->nullable()->change();
        });
        Schema::table('response_arts', function (Blueprint $table) {
            $table->dropColumn('r404');
            $table->string('r405', 1)->nullable()->change();
            $table->dropColumn('r407');
            $table->string('r408', 1)->nullable()->change();
            $table->string('r409', 1)->nullable()->change();
            $table->string('r410', 1)->nullable()->change();
            $table->string('r412', 1)->nullable()->change();
            $table->string('r413', 2)->nullable()->change();
            $table->string('r414', 1)->nullable()->change();
            $table->string('r415', 2)->nullable()->change();
            $table->string('r416A', 1)->nullable()->change();
            $table->integer('r416B')->nullable()->change();
            $table->string('r417', 2)->nullable()->change();
            $table->string('r418', 1)->nullable()->change();
            $table->dropColumn('r419');
            $table->string('r420A', 1)->nullable()->change();
            $table->integer('r420B')->nullable()->change();
            $table->string('r421', 2)->nullable()->change();
            $table->string('r424', 2)->nullable()->change();
            $table->string('r425', 1)->nullable()->change();
            $table->string('r426', 1)->nullable()->change();
            $table->string('r427', 1)->nullable()->change();
            $table->dropColumn('r428');
            $table->string('r428A', 1)->nullable()->change();
            $table->string('r428B', 1)->nullable()->change();
            $table->string('r428C', 1)->nullable()->change();
            $table->string('r428D', 1)->nullable()->change();
            $table->string('r428E', 1)->nullable()->change();
            $table->string('r428F', 1)->nullable()->change();
            $table->string('r428G', 1)->nullable()->change();
            $table->string('r428H', 1)->nullable()->change();
            $table->string('r428I', 1)->nullable()->change();
            $table->string('r428J', 1)->nullable()->change();
            $table->string('r429', 1)->nullable()->change();
            $table->string('r430', 2)->nullable()->change();
            $table->string('r431A', 1)->nullable()->change();
            $table->string('r431B', 1)->nullable()->change();
            $table->string('r431C', 1)->nullable()->change();
            $table->string('r431D', 1)->nullable()->change();
            $table->string('r431E', 1)->nullable()->change();
            $table->string('r431F')->nullable()->change();
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