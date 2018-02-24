<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('customer_id');
            $table->text('comment_value');
            $table->string('comment_active', 3);
            $table->integer('comment_created');
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
        Schema::drop('bp_comments');
    }
}
