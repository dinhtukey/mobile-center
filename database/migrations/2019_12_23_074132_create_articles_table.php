<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('art_name')->nullable()->unique();
            $table->string('art_slug')->index();
            $table->text('art_description')->nullable();
            $table->text('art_content')->nullable();
            $table->string('art_img');
            $table->tinyInteger('art_active')->index()->default(1);
            $table->integer('art_author')->index()->default(0);
            //seo
            $table->string('art_title_seo')->nullable();
            $table->string('art_description_seo')->nullable();
            $table->string('art_keyword_seo')->nullable();
        
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
        Schema::dropIfExists('articles');
    }
}
