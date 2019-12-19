<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('cate_id');
            $table->string('cate_name')->unique();
            $table->string('cate_slug')->index();
            $table->char('cate_icon')->nullable();
            $table->string('cate_avatar')->nullable();
            $table->tinyInteger('cate_active')->default(1)->index();
            $table->integer('cate_total_product')->default(0);


            //seo
            $table->string('cate_title_seo')->nullable();
            $table->string('cate_description_seo')->nullable();
            $table->string('cate_keyword_seo')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
