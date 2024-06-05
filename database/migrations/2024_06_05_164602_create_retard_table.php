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
        Schema::create('retard', function (Blueprint $table) {
            $table->id();
            $table->date('date_absence');
            $table->string('heure');
            $table->string('justificatif');
            $table->integer('emp_id');
            $table->foreign('emp_id')->references('id')->on('employer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retard');
    }
};
