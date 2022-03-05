<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pegawai_id')->unsigned();
            $table->foreign('pegawai_id')
                ->references('id')
                ->on('pegawais')->onDelete('cascade');
            $table->string('lokasi',1);
            $table->string('keterangan',100)->nullable();    
            $table->string('latitude',30)->nullable();    
            $table->string('longtitude',30)->nullable();    
            $table->string('status',1);    
            $table->string('waktu')->timestamp();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
