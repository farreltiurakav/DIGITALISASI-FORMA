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
        Schema::table('users', function (Blueprint $table) {
            $table->string('pelaksanapengawasan9');
            $table->string('pelaksanapengawasan10');
            $table->string('jabatan');
            $table->string('nomerperintah1');
            $table->string('nomerperintah2');
            $table->string('alamat');
            $table->string('bentukkeg');
            $table->string('tujuankeg');
            $table->string('sasarankeg');
            $table->string('waktutempatkeg');
            $table->text('hasilpengawasan');
            $table->string('peristiwapelanggaran');
            $table->string('tempatpelanggaran');
            $table->string('waktupelanggaran');
            $table->string('pelakupelanggaran');
            $table->string('alamatpelanggaran');
            $table->string('namasaksi1');
            $table->string('alamatsaksi1');
            $table->string('namasaksi2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
