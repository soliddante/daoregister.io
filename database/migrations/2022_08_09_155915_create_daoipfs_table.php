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
        Schema::create('daoipfs', function (Blueprint $table) {
            $table->id();
            $table->string('json')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('type')->nullable();
            $table->string('token')->nullable();
            $table->string('worth')->nullable();
            $table->string('vote_mode')->nullable();
            $table->string('document')->nullable();
            $table->string('lazy')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('is_subset')->nullable();
            $table->string('is_minted')->nullable();
            $table->string('published')->nullable();
            $table->string('parent')->nullable();
            $table->string('extras')->nullable();
            $table->string('picture')->nullable();
            $table->string('reform_number')->nullable();
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
        Schema::dropIfExists('daoipfs');
    }
};
