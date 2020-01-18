<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnRatingInTableProducts extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('prod_total_rating')->default(0)->comment('Tổng số đánh giá');
            $table->integer('prod_total_number')->default(0)->comment('Tổng số điểm đánh giá');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('prod_total_rating');
            $table->dropColumn('prod_total_number');
        });
    }
}
