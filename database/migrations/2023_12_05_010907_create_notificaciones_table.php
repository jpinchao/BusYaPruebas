<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacionesTable extends Migration
{
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('ruta');
            $table->text('descripcion');
            $table->integer('tiempo_estimado');
            // Agrega otros campos según sea necesario
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
