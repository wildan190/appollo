<?php

// database/migrations/[timestamp]_create_data_tenders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTendersTable extends Migration
{
    public function up()
    {
        Schema::create('data_tenders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_personil');
            $table->string('jabatan');
            $table->string('nik');
            $table->string('npwp');
            $table->string('kd_tender')->unique(); // Ensure unique values and add an index
            $table->index('kd_tender');
            $table->string('nama_paket');
            $table->string('kd_pokja'); // Sesuaikan dengan kebutuhan Anda
            $table->double('pagu');
            $table->double('hps');
            $table->string('satuan_kerja');
            $table->string('ppk');
            $table->string('nama_instansi');
            $table->double('nilai_penawaran');
            $table->date('tanggal_penetapan');
            $table->double('nilai_kontrak');
            $table->date('tanggal_kontrak');
            $table->string('waktu_pelaksanaan');
            $table->string('tahun');
            $table->timestamps();

            $table->foreign('kd_pokja')->references('kd_pokja')->on('kode_pokjas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_tenders');
    }
}