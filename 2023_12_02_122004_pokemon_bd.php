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
        //Schema y Blueprint son clases que facilitan la creación y manipulación de la estructura de la base de datos.
        Schema::create('pokemon_models',function (Blueprint $table){
            $table-> Id();
            $table-> string ('Nombre');
            $table-> string ('Tipo');
            $table-> string ('Tamaño');
            $table-> decimal('Peso',5,2); //5 = total de numeros, 2= cuantas decimas puede tener
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_models');
    }
};
