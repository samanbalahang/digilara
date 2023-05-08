<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_pages', function (Blueprint $table) {
            $table->id();
            $table->integer('banner_id');
            $table->integer('logo_nav_id');
            $table->integer('register_nav_id');
            $table->integer('main_nav_id');
            $table->integer('city_nav_id');
            $table->integer('main_slider_id');
            $table->integer('sub_domins_id');
            $table->integer('product_red_cat_id');
            $table->integer('sec_banner_id');
            $table->integer('first_forth_product_cat_id');
            $table->integer('first_cat_list_id');
            $table->integer('first_two_product_cat_id');
            $table->integer('first_offers_id');
            $table->integer('first_top_brands_id');
            $table->integer('first_phones_cat_id');
            $table->integer('digiplus_id');
            $table->integer('digiclub_id');
            $table->integer('sec_phones_cat_id');
            $table->integer('topselers_id');
            $table->integer('third_banner_id');
            $table->integer('reads_id');
            $table->integer('footer_id');





            

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
        Schema::dropIfExists('first_pages');
    }
};
