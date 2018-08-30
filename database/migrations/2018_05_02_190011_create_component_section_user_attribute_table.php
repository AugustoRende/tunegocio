<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSectionUserAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_section_user_attribute', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comp_section_user_id')->unsigned();
            $table->foreign('comp_section_user_id')->references('id')->on('component_section_users')->onDelete('no action')->onUpdate('no action');
            $table->integer('component_attribute_id')->unsigned();
            $table->foreign('component_attribute_id')->references('id')->on('component_attributes')->onDelete('no action')->onUpdate('no action');
            $table->string('value',1000)->nullable();
            $table->tinyInteger('visible')->default(1);
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
        Schema::dropIfExists('component_section_user_attribute');
    }
}
