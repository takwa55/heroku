<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachementWilayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachement_wilayas', function (Blueprint $table) {
            $table->id();
            $table->string('file_name',999);
            $table->unsignedBigInteger('wilaya_id')->nullable;
            $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('cascade');
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
        Schema::dropIfExists('attachement_wilayas');
    }
}
