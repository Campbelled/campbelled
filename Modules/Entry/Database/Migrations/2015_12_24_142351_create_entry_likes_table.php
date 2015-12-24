<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntryLikesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('entry__entry_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entry_id')->unsigned();
            $table->string('ip_address');
            $table->timestamps();
            $table->foreign('entry_id')->references('id')->on('entry__entries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::drop('entry__entry_likes');
    }

}
