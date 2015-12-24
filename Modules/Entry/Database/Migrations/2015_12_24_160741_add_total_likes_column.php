<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTotalLikesColumn extends Migration
{

    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('entry__entries', function (Blueprint $table) {
            $table->integer('total_likes')->default(0)->after('repository');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('entry__entries', function (Blueprint $table) {
            $table->dropColumn('total_likes');
        });
    }

}
