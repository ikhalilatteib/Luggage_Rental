<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('sender')->unsigned();
            $table->integer('receiver')->unsigned();
            $table->integer('buy_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('buy_id')->references('id')->on('buy')->cascadeOnDelete();
            $table->foreign('sender')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('receiver')->references('id')->on('users')->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
