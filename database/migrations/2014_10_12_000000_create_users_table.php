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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('wallet')->nullable();
            $table->string('type')->nullable();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("birthday")->nullable();
            $table->string("gendar")->nullable();
            $table->string("phone")->nullable();
            $table->string("password")->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("postalcode")->nullable();
            $table->string("address")->nullable();
            $table->string("proffesion")->nullable();
            $table->string("education")->nullable();
            $table->string("university")->nullable();
            $table->string("language_first")->nullable();
            $table->string("language_second")->nullable();
            $table->string("security_question")->nullable();
            $table->string("security_answer")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
