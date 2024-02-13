<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consults', function (Blueprint $table) {
            $table->id('idConsult');
            $table->unsignedBigInteger('idDoctor');
            $table->unsignedBigInteger('idPatient');
            $table->integer('age');
            $table->string('sex', 10);
            $table->string('systolicPressure', 5);
            $table->string('diastolicPressure', 5);
            $table->string('cigsPerDay', 5);
            $table->tinyInteger('prevalentHyp');
            $table->string('glucose', 5);
            $table->tinyInteger('bloodPressureMeds');
            $table->tinyInteger('diabetic');
            $table->string('diagnostic', 5);
            $table->tinyInteger('status');
            $table->dateTime('consultDate')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updateDate')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Define las restricciones de clave foránea
            $table->foreign('idDoctor')->references('idDoctor')->on('doctors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idPatient')->references('idPatient')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consults');
    }
};
