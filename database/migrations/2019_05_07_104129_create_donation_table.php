<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Biginteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->Biginteger('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id')->on('products');
            $table->Biginteger('id_club')->unsigned();
            $table->foreign('id_club')->references('id')->on('club');
            $table->String('content');
            $table->String('image');
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
        Schema::dropIfExists('donation');
    }
}
