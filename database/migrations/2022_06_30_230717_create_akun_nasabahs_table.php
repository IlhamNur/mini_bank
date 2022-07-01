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
        Schema::create('akun_nasabahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nasabahs_id');
            $table->unsignedBigInteger('users_id');
    
            $table->foreign('nasabahs_id')->references('id')->on('nasabahs');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('akun_nasabahs');
    }
};
