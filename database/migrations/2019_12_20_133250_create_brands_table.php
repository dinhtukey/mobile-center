<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('brand_id');
            $table->string('brand_name')->unique();
            $table->string('brand_slug')->index();
            $table->char('brand_icon')->nullable();
            $table->string('brand_avatar')->nullable();
            $table->tinyInteger('brand_active')->default(1)->index();
            $table->integer('brand_total_product')->default(0);


            //seo
            $table->string('brand_title_seo')->nullable();
            $table->string('brand_description_seo')->nullable();
            $table->string('brand_keyword_seo')->nullable();
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
        Schema::dropIfExists('brands');
    }
}
