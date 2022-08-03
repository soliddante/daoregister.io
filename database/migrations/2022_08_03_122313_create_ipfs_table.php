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
        Schema::create('ipfs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('image')->unique();
            $table->string('token')->unique();
            $table->string('email')->unique();
            $table->string('wallet')->nullable()->unique();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("birthday")->nullable();
            $table->string("gendar")->nullable();
            $table->string("phone")->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("postalcode")->nullable();
            $table->string("address")->nullable();
            $table->string("profession")->nullable();
            $table->string("education")->nullable();
            $table->string("university")->nullable();
            $table->string("language_first")->nullable();
            $table->string("language_second")->nullable();
            $table->string("instagram")->nullable();
            $table->string("Twitter")->nullable();
            $table->string("Facebook")->nullable();
            $table->string("Whatsapp")->nullable();
            $table->string("Telegram")->nullable();
            $table->string("linkedin")->nullable();
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
        Schema::dropIfExists('ipfs');
    }
};
