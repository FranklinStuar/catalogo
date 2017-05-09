<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',50)->unique();
            $table->string('descripcion');
            $table->string('unidad_medida');
            $table->string('medida_empaque');
            $table->double('cantidad_empaque',8,2);
            $table->double('cantidad_apilamiento',8,2);//sirve para ver cuantos empaques pueden se puestos en conjuntos uno sobre otro
            $table->string('foto_frontal');
            $table->string('foto_lateral');
            $table->string('foto_aerea');
            $table->double('precio_fabricante',10,2);
            $table->double('precio_distribuidor',10,2);
            $table->double('precio_mayorista',10,2);
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
        Schema::dropIfExists('products');
    }
}
