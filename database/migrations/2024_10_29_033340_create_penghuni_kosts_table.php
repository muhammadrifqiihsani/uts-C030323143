<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_penghuni_kosts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghuniKostsTable extends Migration
{
    public function up()
    {
        Schema::create('penghuni_kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penghuni');
            $table->string('jenis_kelamin');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->foreignId('kamar_kost_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penghuni_kosts');
    }
}
