<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentSectionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_section_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->integer('section_user_id')->unsigned();
            $table->foreign('section_user_id')->references('id')->on('section_user')->onDelete('cascade')->onUpdate('no action');
            $table->integer('component_id')->unsigned();
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade')->onUpdate('no action');
            $table->string('color')->nullable();
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
        Schema::dropIfExists('component_section_user');
    }
}
