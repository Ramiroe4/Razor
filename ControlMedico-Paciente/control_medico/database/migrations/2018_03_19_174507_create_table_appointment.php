<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function(Blueprint $table){
            $table->increments('id');
            $table->date('created_appoi');
            $table->date('date_apoint');
            $table->integer('id_doctor')->unsigned();
            $table->integer('id_patient')->unsigned();
            $table->foreign('id_doctor')->references('id')->on('users');
            $table->foreign('id_patient')->references('id')->on('users');
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
        Schema::dropExists('appointments');
    }
}
