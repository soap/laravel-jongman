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
        Schema::create('blackout_instances', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->foreignId('blackout_series_id')->constrained('blackout_series', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blackout_instances');
    }
};
