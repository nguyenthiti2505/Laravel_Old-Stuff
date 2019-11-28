<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->Biginteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->Biginteger('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id')->on('products');
            $table->String('content');
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
        Schema::dropIfExists('comments');
    }
}
