<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('profile_name_sk', 255)->nullable();
            $table->string('profile_alt_sk', 255)->nullable();
            $table->string('profile_description_sk', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([ 'profile_description_sk', 'profile_alt_sk', 'profile_name_sk' ]);
        });
    }
};
