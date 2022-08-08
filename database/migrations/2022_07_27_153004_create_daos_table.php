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
        Schema::create('daos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('type')->nullable();
            $table->string('vote_mode')->nullable();
            $table->string('worth')->nullable();
            $table->text('document')->nullable();
            $table->string('extras')->nullable();
            $table->string('published')->nullable()->default(0);
            $table->string('is_subset')->nullable()->default(0);
            $table->string('parent_id')->nullable()->default(0);
            $table->string('lazy')->nullable();
            $table->string('is_minted')->nullable()->default(0);
            $table->string('reform_number')->nullable()->default(0);
            $table->string('token')->nullable();
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
        Schema::dropIfExists('daos');
    }
};
