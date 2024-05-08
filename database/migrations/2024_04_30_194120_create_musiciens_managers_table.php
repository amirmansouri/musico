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
        Schema::create('musicien_manager', function (Blueprint $table) {
            $table->foreignId('utilisateur_id')->constrained('utilisateurs_standards'); // Foreign key to the parent table
            $table->string('profil_musical')->nullable();
            $table->string('lien_chaineyoutube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musiciens_managers');
    }
};
