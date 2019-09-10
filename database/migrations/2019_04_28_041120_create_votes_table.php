<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->integer('icoya')->default(0);
            $table->integer('miip')->default(0);
            $table->integer('yaa1')->default(0);
            $table->integer('yaa2')->default(0);
            $table->integer('iboya')->default(0);
            $table->integer('iacoya')->default(0);
            $table->integer('csra')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
