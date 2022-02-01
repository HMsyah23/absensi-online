<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_bidangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bidang_id')->unsigned();
            $table->foreign('bidang_id')
                ->references('id')
                ->on('bidangs')->onDelete('cascade');
            $table->string('nama',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_bidangs');
    }
}
