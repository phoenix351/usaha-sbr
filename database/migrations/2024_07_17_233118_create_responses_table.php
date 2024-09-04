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
        Schema::create('responses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('region_id');
            $table->string('r105')->nullable();
            $table->string('r106')->nullable();
            $table->string('r107')->nullable();
            $table->string('r108')->nullable();
            $table->string('r109')->nullable();
            $table->string('r110')->nullable();
            $table->string('r111')->nullable();
            $table->string('r112')->nullable();
            $table->string('r113')->nullable();
            $table->string('r114')->nullable();
            $table->integer('r115')->nullable();
            $table->integer('hasil_kunjungan')->nullable();
            $table->string('pcl')->nullable();
            $table->string('pml')->nullable();

            $table->integer('r301A')->nullable();
            $table->integer('r301B')->nullable();
            $table->string('r302')->nullable();
            $table->integer('r303')->nullable();
            $table->integer('r304')->nullable();
            $table->integer('r305')->nullable();
            $table->integer('r306A')->nullable();
            $table->integer('r306B')->nullable();
            $table->integer('r307A')->nullable();
            $table->integer('r307B')->nullable();
            $table->integer('r308')->nullable();
            $table->integer('r309A')->nullable();
            $table->integer('r309B')->nullable();
            $table->integer('r310')->nullable();
            $table->integer('r501')->nullable();
            $table->integer('r501A')->nullable();
            $table->integer('r501B')->nullable();
            $table->integer('r501C')->nullable();
            $table->integer('r501D')->nullable();
            $table->integer('r501E')->nullable();
            $table->integer('r501F')->nullable();
            $table->integer('r501G')->nullable();
            $table->integer('r502')->nullable();
            $table->integer('r502A')->nullable();
            $table->integer('r502B')->nullable();
            $table->integer('r502C')->nullable();
            $table->integer('r502D')->nullable();
            $table->integer('r502E')->nullable();
            $table->integer('r502F')->nullable();
            $table->integer('r502G')->nullable();
            $table->integer('r502H')->nullable();
            $table->integer('r502I')->nullable();
            $table->integer('r502J')->nullable();
            $table->integer('r502K')->nullable();
            $table->integer('r502L')->nullable();
            $table->integer('r502M')->nullable();
            $table->integer('r502N')->nullable();
            $table->integer('r503')->nullable();
            $table->integer('r503A')->nullable();
            $table->integer('r503B')->nullable();
            $table->string('r504')->nullable();
            $table->integer('r505')->nullable();
            $table->integer('r506')->nullable();

            // $table->integer('r6a')->nullable();
            // $table->integer('r8a')->nullable();
            // $table->integer('r8b')->nullable();
            // $table->integer('r8c')->nullable();
            // $table->integer('r8d')->nullable();
            // $table->integer('r8e')->nullable();
            // $table->integer('r8f')->nullable();
            // $table->integer('r9a')->nullable();
            // $table->integer('r9b')->nullable();
            // $table->integer('r9c')->nullable();
            // $table->integer('r10')->nullable();
            // $table->string('konfirmasir10')->nullable();
            // $table->string('r12a')->nullable();
            // $table->string('r12b')->nullable();
            // $table->string('r12c')->nullable();
            // $table->integer('r13a')->nullable();
            // $table->char('kbli', 5)->nullable();
            // $table->char('kbji', 5)->nullable();
            // $table->integer('r16a')->nullable();
            // $table->integer('r16b')->nullable();
            // $table->integer('r25a')->nullable();
            // $table->integer('r37a')->nullable();
            // $table->integer('r37b')->nullable();
            // $table->string('konfirmasir37')->nullable();
            // $table->integer('r41a')->nullable();
            // $table->text('konfirmasi')->nullable();
            // $table->integer('r44a')->nullable();
            // $table->integer('r49d')->nullable();

            $table->char('docState', 1)->default('E');
            $table->integer('submit_status')->default(2);
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
