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
        Schema::create('melomanes_passionnees', function (Blueprint $table) {
            $table->foreignId('utilisateur_id')->constrained('utilisateurs_standards'); // Foreign key to the parent table
            $table->string('preferences_genremusical')->nullable();
            $table->string('achats_billets')->nullable();
            $table->string('offres_covoiturage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('melomanes_passionnes');
    }
};
