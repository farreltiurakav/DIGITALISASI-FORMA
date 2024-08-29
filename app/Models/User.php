<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nomersurat',
        'tahapanawasi',
        'pelaksanapengawasan1',
        'pelaksanapengawasan2',
        'pelaksanapengawasan3',
        'pelaksanapengawasan4',
        'pelaksanapengawasan5',
        'pelaksanapengawasan6',
        'pelaksanapengawasan7',
        'pelaksanapengawasan8',
        'pelaksanapengawasan9',
        'pelaksanapengawasan10',
        'jabatan',
        'nomerperintah1',
        'nomerperintah2',
        'alamat',
        'bentukkeg',
        'tujuankeg',
        'sasarankeg',
        'waktutempatkeg',
        'hasilpengawasan',
        'peristiwapelanggaran',
        'tempatpelanggaran',
        'waktupelanggaran',
        'pelakupelanggaran',
        'alamatpelanggaran',
        'namasaksi1',
        'alamatsaksi1',
        'namasaksi2',
        'alamatsaksi2',
        'alatbukti1',
        'alatbukti2',
        'alatbukti3',
        'barangbukti1',
        'barangbukti2',
        'barangbukti3',
        'uraianpelanggaran',
        'faktaketpelanggaran',
        'analisapelanggaran',
        'pesertasengketa',
        'tempatsengketa',
        'waktusengketa',
        'bentuksengketa',
        'identitassengketa',
        'haritanggalsengketa',
        'kerugiansengketa',
        'uraiansengketa',
        'tanggalttd',
        'namattdpelaksana',
        'image',
        'image2',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
