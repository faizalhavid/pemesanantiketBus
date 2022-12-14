<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('pemesan_id')->constrained('pemesan');
            $table->foreignId('terminal_id')->constrained('terminals');
            $table->foreignId('bus_id')->constrained('bus');
            $table->date('tgl_pesan');
            $table->date('tgl_berangkat');
            $table->time('jam_berangkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
