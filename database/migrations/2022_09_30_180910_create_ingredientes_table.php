<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->foreignId('tipo_ingrediente')->constrained('id')->on('tipo_ingredientes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
