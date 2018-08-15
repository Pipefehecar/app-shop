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
            $table->string('title');
            $table->integer('rooms');//habitaciones
            $table->integer('bathrooms');//baños
            $table->integer('parking')->nullable();//estacionamientos
            $table->integer('area');//mt2
            $table->integer('stratum');//estrato
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->string('address');
            $table->enum('rent_or_sale', ['venta', 'arriendo']);
            $table->bigInteger('price');//pesos 

            // FK
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');


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
