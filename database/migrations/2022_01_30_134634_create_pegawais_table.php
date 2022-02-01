<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('gelar_depan',50)->nullable();
            $table->bigInteger('sub_bidang_id')->unsigned();
            $table->foreign('sub_bidang_id')
                ->references('id')
                ->on('sub_bidangs')->onDelete('cascade');
            $table->string('nama_depan',50);
            $table->string('nama_belakang',50)->nullable();
            $table->string('gelar_belakang',50)->nullable();
            $table->string('status',1);
            $table->string('nip',18)->nullable();
            $table->string('golongan',5)->nullable();
            $table->string('pangkat',50)->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->string('jabatan',100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->date('tgl_pensiun')->nullable();
            $table->string('no_hp',15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
