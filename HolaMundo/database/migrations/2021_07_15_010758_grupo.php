<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();;
            $table->enum("turno",["vespertino","matutino"])->default("matutino");
            $table->enum("semestre",[1,2,3,4,5,6,7,8,9])->default(1);
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
        Schema::dropIfExists('Grupo');
    }
}
