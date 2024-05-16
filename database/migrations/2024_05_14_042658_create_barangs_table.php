<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id_barang'); 
            $table->string('nama_barang', 150);
            $table->string('merek', 100);
            $table->integer('harga');
            $table->integer('stok');
            $table->string('satuan', 10);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
