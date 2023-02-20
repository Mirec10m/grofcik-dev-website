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
        Schema::create('post_items', function (Blueprint $table) {
            $table->id();
            $table->string('type', 255)->nullable();
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('order');
            $table->text('paragraph_text_sk')->nullable();
            $table->string('image_name_sk', 255)->nullable();
            $table->string('image_alt_sk', 255)->nullable();
            $table->string('image_description_sk', 255)->nullable();
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
        Schema::dropIfExists('post_items');
    }
};
