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
        Schema::create('wbtbs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_wbtb_id');
            $table->string('kategori_budaya');
            $table->string('nama');
            $table->text('deskripsi');
            $table->text('alamat');
            $table->char('koordinat');
            $table->string('sk_gambar')->nullable();
            $table->text('document')->nullable();
            $table->timestamps();

            $table->foreign('kategori_wbtb_id')->references('id')->on('kategori_wbtbs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wbtbs');
    }
};
