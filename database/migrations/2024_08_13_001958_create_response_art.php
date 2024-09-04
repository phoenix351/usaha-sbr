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
        Schema::create('response_arts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('response_id');

            // $table->integer('nurt')->nullable();
            $table->integer('no_art')->nullable();
            $table->string('nama_art')->nullable();
            $table->string('r401')->nullable();
            $table->string('r402')->nullable();
            $table->string('r403')->nullable();
            $table->integer('r404')->nullable();
            $table->integer('r405')->nullable();
            $table->date('r406')->nullable();
            $table->integer('r407')->nullable();
            $table->integer('r408')->nullable();
            $table->integer('r409')->nullable();
            $table->integer('r410')->nullable();
            $table->integer('r411')->nullable();
            $table->integer('r412')->nullable();
            $table->integer('r413')->nullable();
            $table->integer('r414')->nullable();
            $table->integer('r415')->nullable();
            $table->integer('r416A')->nullable();
            $table->string('r416B')->nullable();
            $table->integer('r417')->nullable();
            $table->integer('r418')->nullable();
            $table->integer('r419')->nullable();
            $table->integer('r420A')->nullable();
            $table->string('r420B')->nullable();
            $table->integer('r421')->nullable();
            $table->integer('r422')->nullable();
            $table->integer('r423')->nullable();
            $table->integer('r424')->nullable();
            $table->integer('r425')->nullable();
            $table->integer('r426')->nullable();
            $table->integer('r427')->nullable();
            $table->integer('r428')->nullable();
            $table->integer('r428A')->nullable();
            $table->integer('r428B')->nullable();
            $table->integer('r428C')->nullable();
            $table->integer('r428D')->nullable();
            $table->integer('r428E')->nullable();
            $table->integer('r428F')->nullable();
            $table->integer('r428G')->nullable();
            $table->integer('r428H')->nullable();
            $table->integer('r428I')->nullable();
            $table->integer('r428J')->nullable();
            $table->integer('r429')->nullable();
            $table->integer('r430')->nullable();
            $table->integer('r431A')->nullable();
            $table->integer('r431B')->nullable();
            $table->integer('r431C')->nullable();
            $table->integer('r431D')->nullable();
            $table->integer('r431E')->nullable();
            $table->integer('r431F')->nullable();

            // $table->char('docState', 1)->default('E');
            // $table->integer('submit_status')->default(2);
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('response_arts');
    }
};