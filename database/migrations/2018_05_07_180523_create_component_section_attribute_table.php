<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSectionAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_section_attribute', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comp_section_id')->unsigned();
            $table->foreign('comp_section_id')->references('id')->on('component_sections')->onDelete('no action')->onUpdate('no action');
            $table->integer('comp_attribute_id')->unsigned();
            $table->foreign('comp_attribute_id')->references('id')->on('component_attributes')->onDelete('no action')->onUpdate('no action');
            $table->string('value',1000);
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
        Schema::dropIfExists('component_section_attribute');
    }
}
