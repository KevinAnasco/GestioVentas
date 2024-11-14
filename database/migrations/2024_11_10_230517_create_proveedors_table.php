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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();  // ID único para cada proveedor
            $table->string('nombre');  // Nombre del proveedor
            $table->string('email')->unique();  // Correo único del proveedor
            $table->string('telefono')->nullable();  // Teléfono, puede ser nulo
            $table->string('direccion')->nullable();  // Dirección, puede ser nula
            $table->text('descripcion')->nullable();  // Descripción del proveedor
            $table->timestamps();  // Campos de fechas (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');  // Eliminar la tabla de proveedores si existe
    }
};