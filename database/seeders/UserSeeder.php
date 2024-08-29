<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nomersurat' => '053/LHP/PM.00.02/05/2024',
            'tahapanawasi' => 'Pengawasan Pendaftaran PPS di Kota Surabaya',
            'pelaksanapengawasan1' => '1.	Eko Rinda (anggota Bawaslu Kota Surabaya)',
            'pelaksanapengawasan2' => '2.	Hastyo Nurmandriya (staf Pengawasan dan Humas)',
        ]);
    }
}
