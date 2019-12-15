<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reponseprojetcommentaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponseprojetcommentaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('commentaire_id');
            $table->string('email');
            $table->string('nom');
            $table->text('commentaire');
            $table->foreign('commentaire_id')
            ->references('id')->on('projetcommentaires')
            ->onDelete('cascade');
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
        Schema::dropIfExists('reponseprojetcommentaires');
    }
}
