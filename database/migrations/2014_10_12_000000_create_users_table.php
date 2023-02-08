<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('apellido_Paterno');
            $table->string('apellido_Materno');
            $table->string('telefono');
            $table->string('telefono_Emergencia');
            $table->string('grado_Academico');
            $table->string('especialidad');
            $table->string('sub_Especialidad');
            $table->string('horas_x_Mes');
            $table->string('alergias');
            $table->string('enfermedades_Patologicas');
            $table->string('tipo_Rol');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
