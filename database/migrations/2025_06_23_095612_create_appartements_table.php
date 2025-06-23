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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id('id_appartement');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->string('Rue');
            $table->string('Ville');
            $table->string('Pays');
            $table->string('Description');
            $table->text('Image');
            $table->float('Prix_par_jour/personne');
            $table->date('Date_de_début');
            $table->date('Date_de_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
