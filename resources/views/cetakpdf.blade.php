<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengawasan</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12pt;
            line-height: 1.5;
            margin: 0px;
            padding: 20px;
            background-color: #fff;
            color: #000;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 12pt;
            list-style-type: upper-roman;
            margin-top: 0;
            margin-bottom: 5px;
        }

        h2 {
            text-align: left;
            font-size: 12pt;
            margin-top: 0;
            margin-bottom: 5px;
            font-weight: normal;
        }

        h3 {
            text-align: left;
            font-size: 12pt;
            margin-top: 0;
            margin-bottom: 5px;
            font-weight: bold;
        }


        .section {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .value {
            margin-bottom: 15px;
        }

        .signature {
            text-align: right;
            margin-top: 40px;
        }

        .signature p {
            margin-bottom: 5px;
        }

        .nomor-surat {
            text-align: center;
            font-weight: bold;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 8px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .roman-list {
            list-style-type: none;
            /* Menghapus gaya default */
            counter-reset: roman-counter;
            /* Mengatur counter untuk nomor Romawi */
        }

        .roman-list>li {
            counter-increment: roman-counter;
            /* Menginkrement counter untuk setiap item */
            margin-bottom: 1em;
            /* Jarak antar item */
        }


        #subjudul {
            font-weight: bold;
        }

        .signature-container {
            text-align: right;
            margin-right: 100px;
        }

        .page-break {
            page-break-before: always;
        }

        .signature-container {
            text-align: right;
            margin-right: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>FORMULIR MODEL A</h1>
        <h1>LAPORAN HASIL PENGAWASAN PEMILU</h1>

        <div class="nomor-surat">
            {{ $data->nomersurat }}
        </div>

        <h2>
            <ol class="roman-list">
                <li id="subjudul">I. Data Pengawas Pemilihan</li>
                <h3>
                    <table>
                        <tr>
                            <td style="width: 35%;">Tahapan yang diawasi</td>
                            <td style="width: 2%;">: </td>
                            <td>{{ $data->tahapanawasi }}</td>
                        </tr>
                        <tr>
                            <td style="width: 35%;">Nama Pelaksana Tugas Pengawasan</td>
                            <td style="width: 2%;">:</td>
                            <td>
                                <div style="display: grid; grid-template-columns: 20px auto;">

                                    <p style="margin: 0;">{{ $data->pelaksanapengawasan1 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan2 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan3 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan4 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan5 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan6 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan7 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan8 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan9 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->pelaksanapengawasan10 }}</p>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td style="width: 35%;">Jabatan</td>
                            <td style="width: 2%;">: </td>
                            <td>{{ $data->jabatan }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width: 35%;">Nomor Surat Perintah Tugas</td>
                            <td style="width: 2%;">: </td>
                            <td>
                                <div style="display: grid; grid-template-columns: 20px auto;">
                                    <p style="margin: 0;">{{ $data->nomerperintah1 }}</p>
                                    <div></div>
                                    <p style="margin: 0; ">{{ $data->nomerperintah2 }}</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 35%;">Alamat</td>
                            <td style="width: 2%;">: </td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                    </table>
                    <h3>II. Kegiatan Pengawasan</h3>
                    <ol style="list-style-type: decimal; padding-left: 20px;">

                        <table>
                            <tr>

                                <td colspan="3"><strong>1. Kegiatan</strong></td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 25%;">a. Bentuk</td>
                                <td style="width: 2%;">: </td>
                                <td>{{ $data->bentukkeg }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 25%;">b. Tujuan</td>
                                <td style="width: 2%;">: </td>
                                <td style="text-align: justify;">{{ $data->tujuankeg  }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 25%;">c. Sasaran</td>
                                <td style="width: 2%;">: </td>
                                <td>{{ $data->sasarankeg }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 25%;">d. Waktu dan Tempat</td>
                                <td style="width: 2%;">: </td>
                                <td>{{ $data->waktutempatkeg }}</td>
                            </tr>
                            <tr>
                        </table>

                    </ol>

                    <li id="subjudul">III. Uraian Singkat Hasil Pengawasan</li>

                    <!-- Main content container to align everything under 'Uraian' -->
                    <div style="margin-left: 40px; text-align: justify;">
                        <!-- Text content -->
                        <p style="margin-left: 1em; text-indent: 1.8em;">{{ $data->hasilpengawasan }}</p>

                        <!-- Section title -->
                        <p><strong>Informasi Dugaan Pelanggaran:</strong></p>

                        <!-- Table for Informasi Dugaan Pelanggaran -->
                        <table style="border-collapse: collapse; width: 100%;">
                            <!-- Peristiwa Section -->
                            <tr>
                                <td colspan="4">1. Peristiwa</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">a. </td>
                                <td style="width: 30%;">Peristiwa</td>
                                <td>: {{ $data->peristiwapelanggaran }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">a. </td>
                                <td style="width: 30%;">Tempat Kejadian</td>
                                <td>: {{ $data->tempatpelanggaran }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">c. </td>
                                <td style="width: 30%;">Waktu Kejadian</td>
                                <td>: {{ $data->waktupelanggaran }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">d. </td>
                                <td style="width: 30%;">Pelaku</td>
                                <td>: {{ $data->pelakupelanggaran }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">e. </td>
                                <td style="width: 30%;">Alamat</td>
                                <td>: {{ $data->alamatpelanggaran }}</td>
                            </tr>

                            <!-- Saksi-Saksi Section -->
                            <tr>
                                <td colspan="4">2. Saksi - saksi</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">a. </td>
                                <td style="width: 30%;">Nama</td>
                                <td>: {{ $data->namasaksi1 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;"></td>
                                <td style="width: 30%;">Alamat</td>
                                <td>: {{ $data->alamatsaksi1 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">b. </td>
                                <td style="width: 30%;">Nama</td>
                                <td>: {{ $data->namasaksi2 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;"></td>
                                <td style="width: 30%;">Alamat</td>
                                <td>: {{ $data->alamatsaksi2 }}</td>
                            </tr>

                            <!-- Alat Bukti Section -->
                            <tr>

                                <td colspan="4">3. Alat Bukti</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">a </td>

                                <td colspan="2"> {{ $data->alatbukti1 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">b. </td>

                                <td colspan="2"> {{ $data->alatbukti2 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">c. </td>

                                <td colspan="2"> {{ $data->alatbukti3 }}</td>
                            </tr>

                            <!-- Barang Bukti Section -->
                            <tr>
                                <td colspan="4">4. Barang Bukti</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">a. </td>

                                <td colspan="2">{{ $data->barangbukti1 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">b. </td>

                                <td colspan="2">{{ $data->barangbukti2 }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 2%;">c. </td>

                                <td colspan="2">{{ $data->barangbukti3 }}</td>
                            </tr>
                        </table>
                        <p style="margin-left: 0.5em;">5. Uraian Singkat Dugaan Pelanggaran</p>
                        <p style="margin-left: 1em; text-indent: 1.8em;">{{ $data->uraianpelanggaran }}</p>

                        <table style="border-collapse: collapse; width: 100%;">
                            <!-- Peristiwa Section -->

                            <tr>
                                <td style="width: 2%;">6. </td>
                                <td style="width: 32%;">Fakta dan Keterangan</td>
                                <td>: {{ $data->faktaketpelanggaran }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;">7. </td>
                                <td style="width: 30%;">Analisa</td>
                                <td>: {{ $data->analisapelanggaran }}</td>
                            </tr>

                        </table>
                    </div>
                    <div style="margin-left: 40px; text-align: justify;">
                        <li id="subjudul">IV. Informasi Potensi Sengketa</li>

                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>

                                <td colspan="3">1. Peristiwa</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 30%;">a. Peserta Pemilu</td>
                                <td>: {{ $data->pesertasengketa }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 30%;">b. Tempat Kejadian</td>
                                <td>: {{ $data->tempatsengketa }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 30%;">C. Waktu Kejadian</td>
                                <td>: {{ $data->waktusengketa }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>

                            </tr>
                            <tr>

                                <td colspan="3">2. Objek Sengketa</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 40%;">a. Bentuk objek sengketa</td>
                                <td>: {{ $data->bentuksengketa }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 40%;">b. Identitas objek Sengketa</td>
                                <td>: {{ $data->identitassengketa }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 40%;">c. Hari/Tanggal dikeluarkan</td>
                                <td>: {{ $data->haritanggalsengketa }}</td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="width: 40%;">d. Kerugian langsung</td>
                                <td>: {{ $data->kerugiansengketa }}</td>
                            </tr>
                            <tr>

                                <td colspan="3">3. Uraian Singkat Potensi Sengketa: </td>
                            </tr>
                            <tr>
                                <td style="width: 2%;"></td>
                                <td style="text-align: justify;" colspan="2"> {{ $data->uraiansengketa }}</td>
                            </tr>

                        </table>
                    </div>
            </ol>
        </h2>

        <div class="signature">
            <table style="float: right; width: 200px; height: 150px;">
                <tr>
                    <td style="text-align: center; padding-top: 10px;">
                        <p style="margin-bottom: 0px;">{{ $data->tanggalttd }}</p>
                        <p style="margin-top: 0px;">Pelaksana Tugas,</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; vertical-align: bottom; height: 100px;">
                        <p>{{ $data->namattdpelaksana }}</p>
                    </td>
                </tr>
            </table>
        </div>


        <!-- Halaman Baru -->
        <div class="page-break"></div>
        <!-- resources/views/partials/lampiran-partial.blade.php -->
        <h2>Lampiran</h2>

        <div class="image">
            @if(isset($data['image']) && $data['image'])
            <img src="{{ $data['image'] }}" alt="Gambar 1" style="width: 650px; height: auto;">
            @endif
        </div>

        <div class="image">
            @if(isset($data['image2']) && $data['image2'])
            <img src="{{ $data['image2'] }}" alt="Image 2" style="width: 650px; height: auto;">
            @endif
        </div>





    </div>
</body>

</html>