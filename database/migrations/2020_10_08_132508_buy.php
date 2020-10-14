<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Buy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy',function (Blueprint $table){

            $table->increments('id');
            $table->string('vol');
            $table->date('date');
            $table->date('arrival');
            $table->time('depart');
            $table->time('arrived');
            $table->string('from');
            $table->string('to');
            $table->integer('kg');
            $table->string('note');
            $table->integer('is_approve')->default('9');
            $table->timestamp('approved_date')->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy');
    }
}
