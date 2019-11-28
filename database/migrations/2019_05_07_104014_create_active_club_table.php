<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_club', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_club')->unsigned();
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
        Schema::dropIfExists('active_club');
    }
}
