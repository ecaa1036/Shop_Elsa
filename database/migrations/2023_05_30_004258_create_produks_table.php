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
        Schema::create('produks', function (Blueprint $table) {
            // $table->id();
             $table->string('kdproduk',6);
            $table->string('namaproduk',100);
            $table->string('jenisproduk',100);
            $table->string('merk',100);
            $table->string('harga',100);
            $table->string('stok',100);
            $table->string('kategori',50);
            $table->text('deskripsi');
            $table->text('foto');
            $table->primary('kdproduk');
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
        Schema::dropIfExists('produks');
    }
};
