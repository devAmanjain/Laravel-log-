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
        Schema::create('command_execution_logs', function (Blueprint $table) {
            $table->id();
            $table->string('command_name');
            $table->timestamp('start_time');
            $table->integer('execution_time'); // In seconds
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('command_execution_logs');
    }
};
