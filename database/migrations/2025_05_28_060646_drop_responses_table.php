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
        Schema::dropIfExists('responses');
        Schema::dropIfExists('response_arts');
        Schema::dropIfExists('agustus_responses');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
