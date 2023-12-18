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
        Schema::create('scenes', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nom_scene');
            $table->string('nom_grp');
            $table->string('description');
            $table->string('texte_scene');
            $table->string('lien_calcul_scene');
            $table->string('lien_vignette_image');
            $table->string('lien_calcul_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scenes');
    }
};
