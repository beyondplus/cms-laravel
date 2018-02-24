<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpCustomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_custom', function (Blueprint $table) {
            $table->increments('custom_id');
            $table->string('custom_name');
            $table->string('custom_link');
            $table->integer('custom_weight')->default(1);
            $table->string('custom_icon');
            $table->integer('parent_id')->default(1);
            $table->integer('custom_created');
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
        Schema::drop('bp_custom');
    }
}
