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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_empleado')->nullable();
            $table->foreign('id_empleado')->references('id')->on('empleados');
            $table->string('username')->unique();
            $table->string('password')->unique();
            $table->string('email')->unique();
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('id_rol_usuario')->default(3);
            $table->foreign('id_rol_usuario')->references('id')->on('rol_usuarios');
            //$table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
