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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('nombre');
            $table->integer('edad');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('password');
            $table->float('peso',5,2);
            $table->float('altura',5,2);
            $table->float('IMC',5,2);
            $table->string('sexo');
            $table->string('fotografia');
            $table->float('cuello',5,2);
            $table->float('cintura',5,2);
            $table->float('cadera',5,2);
            $table->float('pecho',5,2);
            $table->float('brazo_derecho',5,2);
            $table->float('abdomen',5,2);
            $table->float('pierna_derecha',5,2);
            $table->float('pantorrilla',5,2);
            $table->float('peso_ideal',5,2);
            $table->text('objetivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
