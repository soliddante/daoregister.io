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
        Schema::create('dao_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('dao_id');
            $table->string('partner_email');
            $table->string('partner_type');
            $table->integer('partner_share');
            $table->integer('partner_accepted')->default(0)->nullable();
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
        Schema::dropIfExists('dao_user');
    }
};
