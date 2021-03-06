<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_images', function (Blueprint $table) {
            $table->increments('id');

            $table->string('image');
            $table->boolean('featured')->default(false);

            // FK
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('publications');

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
        Schema::dropIfExists('publication_images');
    }
}
