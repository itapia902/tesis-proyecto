<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('Producto_Id');
            $table->string('Producto_Nombre',100);
            $table->unsignedInteger('Categoria_Id');
            $table->decimal('Producto_Precio');
            $table->integer('Producto_Cantidad');
            $table->string('Producto_Descripcion',500);
            $table->string('Producto_Imagen');
            

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
        Schema::dropIfExists('productos');
    }
}
