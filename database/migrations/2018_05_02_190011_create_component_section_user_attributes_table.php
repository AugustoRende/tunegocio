<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSectionUserAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_section_user_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->integer('comp_section_user_id')->unsigned();
            $table->foreign('comp_section_user_id')->references('id')->on('component_section_user')->onDelete('cascade')->onUpdate('no action');
            $table->integer('comp_type_attribute_id')->unsigned();
            $table->foreign('comp_type_attribute_id')->references('id')->on('component_type_attributes')->onDelete('cascade')->onUpdate('no action');
            $table->string('value')->nullable();
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
        Schema::dropIfExists('component_section_user_attributes');
    }
}
