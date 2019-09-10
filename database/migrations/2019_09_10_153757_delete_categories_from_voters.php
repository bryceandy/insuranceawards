<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteCategoriesFromVoters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voters', function (Blueprint $table) {
            $table->dropColumn(['yaa1', 'yaa2', 'iboya', 'iacoya', 'csra']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voters', function (Blueprint $table) {
            //
        });
    }
}
