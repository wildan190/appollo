<?php

// database/migrations/[timestamp]_create_pokjas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokjasTable extends Migration
{
    public function up()
    {
        Schema::create('pokjas', function (Blueprint $table) {
            $table->id();
            $table->string('id_pokja'); // Sesuaikan dengan kebutuhan Anda
            $table->string('nama_pokja');
            $table->string('nip');
            $table->string('jabatan_pokja');
            $table->string('golongan');
            $table->string('telepon');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pokjas');
    }
}
