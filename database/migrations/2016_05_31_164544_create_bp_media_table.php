<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_media', function (Blueprint $table) {
            $table->increments('media_id');
            $table->string('media_name');
            $table->string('media_link');
            $table->integer('media_type');
            $table->string('media_weight');
            $table->text('media_description');
            $table->integer('media_created');
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
        Schema::drop('bp_media');
    }
}
