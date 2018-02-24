<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
            $table->string('category_name_mm');
            $table->integer('parent_id');
            $table->string('category_link');
            $table->string('category_icon');
            $table->string('category_marker');
            $table->text('category_desc');
            $table->integer('count_view');
            $table->string('category_lan');
            $table->integer('category_dash');
            $table->string('category_active',3);
            $table->string('category_created');
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
        Schema::drop('bp_category');
    }
}
