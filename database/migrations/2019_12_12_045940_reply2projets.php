<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reply2projets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('reply2projets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('comment_id');
            $table->string('email');
            $table->string('nom');
            $table->text('reply');
            $table->foreign('comment_id')
            ->references('id')->on('commentprojets')
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
        Schema::dropIfExists('reply2projets');
    }
}
