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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name_sk', 255)->nullable();
            $table->string('slug_sk', 255)->nullable()->unique();
            $table->tinyInteger('published_sk')->default(0);
            $table->string('short_sk', 255)->nullable();
            $table->bigInteger('post_category_id')->unsigned()->nullable();
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('set null')->onUpdate('set null');
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
        Schema::dropIfExists('posts');
    }
};
