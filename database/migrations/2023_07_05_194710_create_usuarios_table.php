<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('usuario_id');
            $table->string('usuario_Nombre',50);
            $table->string('usuario_Apellido',50);
            $table->string('usuario_Telefono',10);
            $table->string('usuario_Direccion',200);
            $table->string('usuario_Email')->unique();
            $table->timestamp('usuario_email_verified_at')->nullable();
            $table->string('usuario_Contrasena',15);
            $table->string('usuario_Tipo')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
