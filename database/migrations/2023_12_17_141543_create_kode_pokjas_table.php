<?php

// database/migrations/[timestamp]_create_kode_pokjas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodePokjasTable extends Migration
{
    public function up()
    {
        Schema::create('kode_pokjas', function (Blueprint $table) {
            $table->id();
            $table->string('kd_pokja')->unique(); // Ensure unique values
            $table->string('keterangan');
            $table->timestamps();
        });

        // Add an index on kd_pokja
        Schema::table('kode_pokjas', function (Blueprint $table) {
            $table->index('kd_pokja');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kode_pokjas');
    }
}
