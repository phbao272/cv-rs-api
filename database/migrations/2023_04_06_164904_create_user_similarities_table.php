<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSimilaritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_similarities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_1_id");
            $table->foreign('user_1_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger("user_2_id");
            $table->foreign('user_2_id')->references('id')->on('users')->onDelete('cascade');

            $table->float("similarity");

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
        Schema::dropIfExists('user_similarities');
    }
}
