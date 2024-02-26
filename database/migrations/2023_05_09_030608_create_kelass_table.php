<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelass', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kelas',150);
            $table->string('tingkat_kelas',150);
            $table->string('jurusan',150);
            $table->string('jumlah_siswa',150);
            $table->bigInteger('guru_id');
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
        Schema::dropIfExists('kelass');
    }
}
