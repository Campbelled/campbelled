<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddRepositoryColumn extends Migration
{

    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::table('entry__entries', function (Blueprint $table) {
            $table->string('repository')->after('url');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('entry__entries', function (Blueprint $table) {
            $table->dropColumn('repository');
        });
    }

}
