<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonsprojetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donsprojets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('projet_id');
            $table->float('montant');
            $table->string('nom');
            $table->string('email');
            $table->string('adresse');
            $table->bigInteger('telephone');
            $table->foreign('projet_id')
            ->references('id')->on('projets')
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
        Schema::dropIfExists('donsprojets');
    }
}
