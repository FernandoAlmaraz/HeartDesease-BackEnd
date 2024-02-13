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
        Schema::create('people', function (Blueprint $table) {
            $table->id('idPerson');
            $table->string('firstName', 60);
            $table->string('lastName', 60);
            $table->dateTime('birthDate');
            $table->boolean('sex', 10)->default(1);
            $table->string('phone', 30);
            $table->string('identityCard', 25);
            $table->boolean('status')->default(1);
            $table->dateTime('registerDate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updateDate')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
