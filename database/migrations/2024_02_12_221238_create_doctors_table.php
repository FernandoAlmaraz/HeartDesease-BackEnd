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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('idDoctor');
            $table->string('licenseNumber', 25);
            $table->unsignedBigInteger('idPerson'); // Usamos unsignedBigInteger para la clave foránea
            $table->foreign('idPerson')->references('idPerson')->on('Person')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
