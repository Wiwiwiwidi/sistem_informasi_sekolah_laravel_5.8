<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis',150);
            $table->string('nama_siswa',150);
            $table->string('jenkel',150);
            $table->string('agama',150);
            $table->string('telp',150);
            $table->string('tmp_lahir',150);
            $table->date('tgl_lahir',150);
            $table->string('alamat',150);
            $table->string('foto');
            $table->string('email');
            $table->bigInteger('kelas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
