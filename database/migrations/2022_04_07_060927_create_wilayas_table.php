<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayas', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('N_Pension');
			$table->string('Nom');
			$table->date('Demande');
			$table->date('Reponse');
			$table->string('Periode');
			$table->string('Emp');
			$table->string('Rapport');
			$table->string('user',300);
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
        Schema::dropIfExists('wilayas');
    }
}
