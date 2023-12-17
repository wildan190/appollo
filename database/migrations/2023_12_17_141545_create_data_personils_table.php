<?php

// database/migrations/[timestamp]_create_data_personils_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPersonilsTable extends Migration
{
    public function up()
    {
        Schema::create('data_personils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_personil1');
            $table->string('jabatan1');
            $table->string('nik1');
            $table->string('npwp1');
            $table->string('kd_tender');
            $table->timestamps();

            $table->foreign('kd_tender')->references('kd_tender')->on('data_tenders');
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_personils');
    }
}
