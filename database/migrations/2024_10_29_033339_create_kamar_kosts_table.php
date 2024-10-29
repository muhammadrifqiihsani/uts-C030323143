<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_kamar_kosts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarKostsTable extends Migration
{
    public function up()
    {
        Schema::create('kamar_kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar');
            $table->integer('nomor_kamar');
            $table->decimal('harga_per_bulan', 10, 2);
            $table->string('fasilitas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kamar_kosts');
    }
}
