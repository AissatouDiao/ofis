<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentprojetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentprojets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('projet_id');
            $table->string('email');
            $table->string('nom');
            $table->text('commentaire');
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
        Schema::dropIfExists('commentprojets');
    }
}
