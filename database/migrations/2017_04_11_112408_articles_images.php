<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlesImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_images', function (Blueprint $table) {

            $table->integer('articles_id')->unsigned()->nullable();
            $table->foreign('articles_id')->references('id')
                ->on('articles')->onDelete('cascade');

            $table->integer('images_id')->unsigned()->nullable();
            $table->foreign('images_id')->references('id')
                ->on('images')->onDelete('cascade');
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
        Schema::dropIfExists('articles_images');
    }
}
