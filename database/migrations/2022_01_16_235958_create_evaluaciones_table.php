<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {

            $table->increments('id_evaluacion');
            $table->date('fecha_registro');
            $table->integer('id_tutor');
            $table->integer('id_periodo');
            $table->float('porcentaje');
            $table->integer('id_mes');
            $table->string('observacion', 200);
            $table->integer('id_coordinador');
            $table->integer('id_jefe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones');
    }
}
