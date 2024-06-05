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
        Schema::create('vehicule', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('tarif');
            $table->string('marque');
            $table->string('nom');
            $table->string('plaque');
            $table->text('caractéristiques');
            $table->integer('caution_de_base');
            $table->string('etat');
            $table->integer('location_id');
            $table->foreign('location_id')->references('id')->on('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicule');
    }
};
