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
        Schema::create('utilisateurs_standard', function (Blueprint $table) {
            $table->foreignId('utilisateur_id')->constrained('utilisateurs'); // Clé étrangère vers la table 'utilisateurs'
            $table->integer('compte_id')->nullable(); // Exemple de colonne spécifique
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs_standards');
    }
};
