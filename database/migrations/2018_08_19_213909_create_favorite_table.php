<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite', function (Blueprint $table) {
             //user's FK
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //publication's FK
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('publication');

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
        Schema::dropIfExists('favorite');
    }
}
