<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikearticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likearticles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('summernote_id');
            $table->foreign('summernote_id')
            ->references('id')->on('summernotes')
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
        Schema::dropIfExists('likearticles');
    }
}
