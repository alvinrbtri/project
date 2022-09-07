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
        Schema::create('sub_layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->decimal('harga');
            $table->decimal('diskon');
            $table->string('kode_pesan');
            $table->enum('status1',['tersedia', 'tidak tersedia']);
            $table->enum('status2',['buka', 'tutup']);
            $table->boolean('fitur')->default(false);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('gambar')->nullable();
            $table->text('gambars')->nullable();
            $table->bigInteger('layanan_id')->unsigned()->nullable();
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
        Schema::dropIfExists('sub_layanans');
    }
};
