<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->integer('rooms');//habitaciones
            $table->integer('bathrooms');//baños
            $table->integer('parking')->nullable();//estacionamientos
            $table->integer('area');//mt2
            $table->integer('stratum');//estrato
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->string('address');
            $table->enum('rent_or_sale', ['venta', 'arriendo', 'venta y arriendo']);
            $table->bigInteger('rent_price')->nullable();//pesos 
            $table->bigInteger('sale_price')->nullable();//pesos 

            // FK
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('types');


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
        Schema::dropIfExists('publications');
    }
}
