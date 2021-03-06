<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bp_taxes', function (Blueprint $table) {
            $table->increments('tax_id');
            $table->integer('parent_id')->default(0);
            $table->string('tax_name');
            $table->string('tax_link');
            $table->string('tax_icon')->default('fa fa-list');
            $table->integer('tax_lan')->default(1);
            $table->string('tax_type');
            $table->string('tax_active', 3)->default('yes');
            $table->integer('translate_id')->default(0);
            $table->integer('lang')->default(1);
            $table->integer('staff_id')->default(1);
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
        Schema::drop('bp_taxes');
    }
}
