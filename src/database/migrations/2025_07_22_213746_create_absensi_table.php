<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('siswa_id');
            $table->date('tanggal');
            $table->enum('kehadiran', ['Hadir', 'Izin', 'Sakit', 'Alpha']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
