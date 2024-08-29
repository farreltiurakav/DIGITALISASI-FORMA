@extends('layout.main')
@section('content')
<style>
    /* Styling untuk membuat kolom Action sticky */
    .table th.sticky-action,
    .table td.sticky-action {
        position: sticky;
        right: 0;
        background-color: white;
        /* Sesuaikan dengan background tabel Anda */
        z-index: 1;
        /* Hapus border-left dari sini karena kita akan menggunakan pseudo-element */
    }

    /* Pseudo-element untuk menambahkan border kiri pada kolom sticky */
    .table th.sticky-action::before,
    .table td.sticky-action::before {
        content: '';
        position: absolute;
        left: -2px;
        /* Posisi border di sebelah kiri */
        top: 0;
        bottom: 0;
        width: 2px;
        /* Ketebalan border */
        background-color: #dee2e6;
        /* Warna border */
        z-index: 2;
        /* Letakkan di atas konten lainnya */
    }

    /* Styling untuk scrollbar horizontal pada tabel */
    .table-responsive {
        overflow-x: auto;
    }
</style>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-sm-6">
                    <h1 class="m-0">Form A</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <style>
        .table th,
        .table td {
            max-width: 500px;
            /* Menetapkan lebar maksimum kolom */
            white-space: nowrap;
            /* Mencegah teks membungkus ke baris baru */
            overflow: hidden;
            /* Menyembunyikan teks yang melebihi lebar kolom */
            text-overflow: ellipsis;
            /* Menambahkan "..." jika teks terlalu panjang */
        }

        .sticky-action {
            position: sticky;
            right: 0;
            background-color: white;
            z-index: 1;
            width: 300px;
        }
    </style>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Form A</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomer Surat</th>
                                        <th>Tahapan Yang Diawasi</th>
                                        <th>Pelaksana Pengawasan 1</th>
                                        <th>Pelaksana Pengawasan 2</th>
                                        <th>Pelaksana Pengawasan 3</th>
                                        <th>Pelaksana Pengawasan 4</th>
                                        <th>Pelaksana Pengawasan 5</th>
                                        <th>Pelaksana Pengawasan 6</th>
                                        <th>Pelaksana Pengawasan 7</th>
                                        <th>Pelaksana Pengawasan 8</th>
                                        <th>Pelaksana Pengawasan 9</th>
                                        <th>Pelaksana Pengawasan 10</th>
                                        <th>Jabatan</th>
                                        <th>Nomer Perintah 1</th>
                                        <th>Nomer Perintah 2</th>
                                        <th>Alamat</th>
                                        <th>Bentuk Kegiatan</th>
                                        <th>Tujuan Kegiatan</th>
                                        <th>Sasaran Kegiatan</th>
                                        <th>Waktu & Tempat Kegiatan</th>
                                        <th>Hasil Pengawasan</th>
                                        <th>Peristiwa Pelanggaran</th>
                                        <th>Tempat Pelanggaran</th>
                                        <th>Waktu Pelanggaran</th>
                                        <th>Pelaku Pelanggaran</th>
                                        <th>Alamat Pelanggaran</th>
                                        <th>Nama Saksi 1</th>
                                        <th>Alamat Saksi 1</th>
                                        <th>Nama Saksi 2</th>
                                        <th>Alamat Saksi 2</th>
                                        <th>Alat Bukti 1</th>
                                        <th>Alat Bukti 2</th>
                                        <th>Alat Bukti 3</th>
                                        <th>Barang Bukti 1</th>
                                        <th>Barang Bukti 2</th>
                                        <th>Barang Bukti 3</th>
                                        <th>Uraian Pelanggaran</th>
                                        <th>Fakta Keterangan Pelanggaran</th>
                                        <th>Analisa Pelanggaran</th>
                                        <th>Peserta Sengketa</th>
                                        <th>Tempat Sengketa</th>
                                        <th>Waktu Sengketa</th>
                                        <th>Bentuk Sengketa</th>
                                        <th>Identitas Sengketa</th>
                                        <th>Hari & Tanggal Sengketa</th>
                                        <th>Kerugian Sengketa</th>
                                        <th>Uraian Sengketa</th>
                                        <th>Tanggal TTD</th>
                                        <th>Nama TTD Pelaksana</th>
                                        <th>Foto Lampiran 1</th>
                                        <th>Foto Lampiran 2</th>
                                        <th class="sticky-action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->nomersurat }}</td>
                                        <td>{{ $d->tahapanawasi }}</td>
                                        <td>{{ $d->pelaksanapengawasan1 }}</td>
                                        <td>{{ $d->pelaksanapengawasan2 }}</td>
                                        <td>{{ $d->pelaksanapengawasan3 }}</td>
                                        <td>{{ $d->pelaksanapengawasan4 }}</td>
                                        <td>{{ $d->pelaksanapengawasan5 }}</td>
                                        <td>{{ $d->pelaksanapengawasan6 }}</td>
                                        <td>{{ $d->pelaksanapengawasan7 }}</td>
                                        <td>{{ $d->pelaksanapengawasan8 }}</td>
                                        <td>{{ $d->pelaksanapengawasan9 }}</td>
                                        <td>{{ $d->pelaksanapengawasan10 }}</td>
                                        <td>{{ $d->jabatan }}</td>
                                        <td>{{ $d->nomerperintah1 }}</td>
                                        <td>{{ $d->nomerperintah2 }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>{{ $d->bentukkeg }}</td>
                                        <td>{{ $d->tujuankeg }}</td>
                                        <td>{{ $d->sasarankeg }}</td>
                                        <td>{{ $d->waktutempatkeg }}</td>
                                        <td>{{ $d->hasilpengawasan }}</td>
                                        <td>{{ $d->peristiwapelanggaran }}</td>
                                        <td>{{ $d->tempatpelanggaran }}</td>
                                        <td>{{ $d->waktupelanggaran }}</td>
                                        <td>{{ $d->pelakupelanggaran }}</td>
                                        <td>{{ $d->alamatpelanggaran }}</td>
                                        <td>{{ $d->namasaksi1 }}</td>
                                        <td>{{ $d->alamatsaksi1 }}</td>
                                        <td>{{ $d->namasaksi2 }}</td>
                                        <td>{{ $d->alamatsaksi2 }}</td>
                                        <td>{{ $d->alatbukti1 }}</td>
                                        <td>{{ $d->alatbukti2 }}</td>
                                        <td>{{ $d->alatbukti3 }}</td>
                                        <td>{{ $d->barangbukti1 }}</td>
                                        <td>{{ $d->barangbukti2 }}</td>
                                        <td>{{ $d->barangbukti3 }}</td>
                                        <td>{{ $d->uraianpelanggaran }}</td>
                                        <td>{{ $d->faktaketpelanggaran }}</td>
                                        <td>{{ $d->analisapelanggaran }}</td>
                                        <td>{{ $d->pesertasengketa }}</td>
                                        <td>{{ $d->tempatsengketa }}</td>
                                        <td>{{ $d->waktusengketa }}</td>
                                        <td>{{ $d->bentuksengketa }}</td>
                                        <td>{{ $d->identitassengketa }}</td>
                                        <td>{{ $d->haritanggalsengketa }}</td>
                                        <td>{{ $d->kerugiansengketa }}</td>
                                        <td>{{ $d->uraiansengketa }}</td>
                                        <td>{{ $d->tanggalttd }}</td>
                                        <td>{{ $d->namattdpelaksana }}</td>
                                        <td><img src="{{ asset('storage/image-user/' . $d->image) }}" alt="" width="150"></td>
                                        <td><img src="{{ asset('storage/image2-user/' . $d->image2) }}" alt="" width="150"></td>

                                        <td class="sticky-action">
                                            <div style="margin-bottom: 5px;">
                                                <a href="{{ route('edit',['id' => $d->id]) }}" class="btn btn-primary btn-block mb-2">
                                                    <i class="fas fa-pen"></i> Edit
                                                </a>
                                                <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-danger btn-block mb-2">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </a>
                                            </div>
                                            <a href="{{ route('cetak.pdf', ['id' => $d->id]) }}" class="btn btn-secondary btn-block">
                                                <i class="fas fa-file-pdf"></i> Cetak PDF
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-hapus{{ $d->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Yakin Ingin Menghapus Data?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="{{ route('delete',['id' => $d->id])}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Hapus Data</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>

                                    <!-- /.modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection