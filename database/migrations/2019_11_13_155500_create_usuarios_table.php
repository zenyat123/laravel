<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->primary("id_usuario");            
            $table->text("nombres");
            $table->text("apellidos");
            $table->text("direccion");
            $table->text("telefono");
            $table->text("celular");
            $table->text("departamento");
            $table->text("cargo");
            $table->integer("salario")->unsigned();
            $table->text("email");
            $table->timestamp("registro");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}