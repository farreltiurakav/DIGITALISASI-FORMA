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
            $table->string('alamatsaksi2');
            $table->string('alatbukti1');
            $table->string('alatbukti2');
            $table->string('alatbukti3');
            $table->string('barangbukti1');
            $table->string('barangbukti2');
            $table->string('barangbukti3');
            $table->text('uraianpelanggaran');
            $table->string('faktaketpelanggaran');
            $table->string('analisapelanggaran');
            $table->string('pesertasengketa');
            $table->string('tempatsengketa');
            $table->string('waktusengketa');
            $table->string('bentuksengketa');
            $table->string('identitassengketa');
            $table->string('haritanggalsengketa');
            $table->string('kerugiansengketa');
            $table->text('uraiansengketa');
            $table->string('tanggalttd');
            $table->string('namattdpelaksana');
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
