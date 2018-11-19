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
            $table->increments('id');
            $table->timestamps();
            $table->string('codigo');
            $table->string('codigofacturacion')->nullable();
            $table->string('nombre');
            $table->string('nombreslug');
            $table->string('descripcioncorta')->nullable();
            $table->text('descripcionlarga')->nullable();
            $table->string('familia');
            $table->string('imagen')->nullable();
            $table->boolean('mostrar')->nullable();
            $table->decimal('status',2,0)->nullable();
            $table->string('moneda',5);
            $table->decimal('precio',8,2);
            $table->decimal('precioviejo',8,2)->nullable();
            $table->string('monedapato',5)->nullable();
            $table->decimal('preciopato',8,2)->nullable();
            $table->string('monedaml',5)->nullable();
            $table->decimal('precioml',8,2)->nullable();
            $table->decimal('ventaminima',4,0)->nullable();
            $table->string('nombrefigaro')->nullable();
            $table->string('video')->nullable();
            $table->string('afiche')->nullable();
            $table->string('marca')->nullable();
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
