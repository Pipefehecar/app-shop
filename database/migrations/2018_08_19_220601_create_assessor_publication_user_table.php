<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessorPublicationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //ESTO NO TIENE RELACION PLASMADA EN LOS MODELOS
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('hour');

            //user's FK
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('user');
            //assessor's FK
            $table->integer('assessor_id')->unsigned()->nullable();
            $table->foreign('assessor_id')->references('id')->on('assessor');

            //publication's FK
            $table->integer('publication_id')->unsigned()->nullable();
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
        Schema::dropIfExists('appointment');
    }
}
