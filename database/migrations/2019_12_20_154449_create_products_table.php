<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name')->unique();
            $table->string('prod_slug')->index();
            $table->integer('prod_price');
            $table->string('prod_img');
            $table->string('prod_warranty');
            $table->string('prod_accessories');
            $table->string('prod_condition');
            $table->string('prod_promotion');
            $table->text('prod_description');
            $table->text('prod_content');
            $table->tinyInteger('prod_featured');
            $table->tinyInteger('prod_active');
            $table->integer('prod_author')->nullable();
            //seo
            $table->string('prod_title_seo')->nullable();
            $table->string('prod_description_seo')->nullable();
            $table->string('prod_keyword_seo')->nullable();


            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')->references('cate_id')->on('categories')->onDelete('cascade');
            $table->integer('prod_brand')->unsigned();
            $table->foreign('prod_brand')->references('brand_id')->on('brands')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
