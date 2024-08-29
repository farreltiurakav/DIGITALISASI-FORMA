@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form A</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main form -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('update',['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Form A</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nomersurat">Nomer Surat</label>
                                        <input type="text" name="nomersurat" class="form-control" value="{{ $data->nomersurat }}" id="nomersurat" placeholder="Masukkan Nomer Surat">
                                        @error('nomersurat')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tahapanawasi">Tahapan Yang Diawasi</label>
                                        <input type="text" name="tahapanawasi" class="form-control" value="{{ $data->tahapanawasi }}" id="tahapanawasi" placeholder="Masukkan Tahapan Yang Diawasi">
                                        @error('tahapanawasi')
                                        <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan1">Pelaksana Pengawasan 1 (contoh: 1. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan1" class="form-control" value="{{ $data->pelaksanapengawasan1 }}" id="pelaksanapengawasan1" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan2">Pelaksana Pengawasan 2 (contoh: 2. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan2" class="form-control" value="{{ $data->pelaksanapengawasan2 }}" id="pelaksanapengawasan2" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan3">Pelaksana Pengawasan 3 (contoh: 3. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan3" class="form-control" value="{{ $data->pelaksanapengawasan3 }}" id="pelaksanapengawasan3" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan4">Pelaksana Pengawasan 4 (contoh: 4. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan4" class="form-control" value="{{ $data->pelaksanapengawasan4 }}" id="pelaksanapengawasan4" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan5">Pelaksana Pengawasan 5 (contoh: 5. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan5" class="form-control" value="{{ $data->pelaksanapengawasan5 }}" id="pelaksanapengawasan5" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan6">Pelaksana Pengawasan 6 (contoh: 6. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan6" class="form-control" value="{{ $data->pelaksanapengawasan6 }}" id="pelaksanapengawasan6" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan7">Pelaksana Pengawasan 7 (contoh: 7. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan7" class="form-control" value="{{ $data->pelaksanapengawasan7 }}" id="pelaksanapengawasan7" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan8">Pelaksana Pengawasan 8 (contoh: 8. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan8" class="form-control" value="{{ $data->pelaksanapengawasan8 }}" id="pelaksanapengawasan8" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan9">Pelaksana Pengawasan 9 (contoh: 9. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan9" class="form-control" value="{{ $data->pelaksanapengawasan9 }}" id="pelaksanapengawasan9" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelaksanapengawasan10">Pelaksana Pengawasan 10 (contoh: 10. Adi (anggota Bawaslu Kota Surabaya))</label>
                                        <input type="text" name="pelaksanapengawasan10" class="form-control" value="{{ $data->pelaksanapengawasan10 }}" id="pelaksanapengawasan10" placeholder="Masukkan Nama Pelaksana Pengawasan">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan (masukkan "-" jika kosong)</label>
                                        <input type="text" name="jabatan" class="form-control" value="{{ $data->jabatan }}" id="jabatan" placeholder="Masukkan Jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomerperintah1">Nomer Perintah 1</label>
                                        <input type="text" name="nomerperintah1" class="form-control" value="{{ $data->nomerperintah1 }}" id="nomerperintah1" placeholder="Masukkan Nomer Perintah">
                                    </div>
                                    <div class="form-group">
                                        <label for="nomerperintah2">Nomer Perintah 2</label>
                                        <input type="text" name="nomerperintah2" class="form-control" value="{{ $data->nomerperintah2 }}" id="nomerperintah2" placeholder="Masukkan Nomer Perintah">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}" id="alamat" placeholder="Masukkan Alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="bentukkeg">Bentuk Kegiatan</label>
                                        <input type="text" name="bentukkeg" class="form-control" value="{{ $data->bentukkeg }}" id="bentukkeg" placeholder="Masukkan Bentuk Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tujuankeg">Tujuan Kegiatan</label>
                                        <input type="text" name="tujuankeg" class="form-control" value="{{ $data->tujuankeg }}" id="tujuankeg" placeholder="Masukkan Tujuan Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="sasarankeg">Sasaran Kegiatan</label>
                                        <input type="text" name="sasarankeg" class="form-control" value="{{ $data->sasarankeg }}" id="sasarankeg" placeholder="Masukkan Sasaran Kegiatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="waktutempatkeg">Waktu & Tempat Kegiatan</label>
                                        <input type="text" name="waktutempatkeg" class="form-control" value="{{ $data->waktutempatkeg }}" id="waktutempatkeg" placeholder="Masukkan Waktu & Tempat Kegiatan">
                                    </div>
                                    <div class=" form-group">
                                        <label for="hasilpengawasan">Hasil Pengawasan (Mencakup 5W 1H)</label>
                                        <textarea name="hasilpengawasan" class="form-control" value="{{ $data->hasilpengawasan }}" id="hasilpengawasan" placeholder="Masukkan Uraian Hasil Pengawasan" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="peristiwapelanggaran">Peristiwa Pelanggaran</label>
                                        <input type="text" name="peristiwapelanggaran" class="form-control" value="{{ $data->peristiwapelanggaran }}" id="peristiwapelanggaran" placeholder="Masukkan Peristiwa Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatpelanggaran">Tempat Pelanggaran</label>
                                        <input type="text" name="tempatpelanggaran" class="form-control" value="{{ $data->tempatpelanggaran }}" id="tempatpelanggaran" placeholder="Masukkan Tempat Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="waktupelanggaran">Waktu Pelanggaran</label>
                                        <input type="text" name="waktupelanggaran" class="form-control" value="{{ $data->waktupelanggaran }}" id="waktupelanggaran" placeholder="Masukkan Waktu Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="pelakupelanggaran">Pelaku Pelanggaran</label>
                                        <input type="text" name="pelakupelanggaran" class="form-control" value="{{ $data->pelakupelanggaran }}" id="pelakupelanggaran" placeholder="Masukkan Pelaku Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatpelanggaran">Alamat Pelanggaran</label>
                                        <input type="text" name="alamatpelanggaran" class="form-control" value="{{ $data->alamatpelanggaran }}" id="alamatpelanggaran" placeholder="Masukkan Alamat Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="namasaksi1">Nama Saksi 1</label>
                                        <input type="text" name="namasaksi1" class="form-control" value="{{ $data->namasaksi1 }}" id="namasaksi1" placeholder="Masukkan Nama Saksi">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatsaksi1">Alamat Saksi 1</label>
                                        <input type="text" name="alamatsaksi1" class="form-control" value="{{ $data->alamatsaksi1 }}" id="alamatsaksi1" placeholder="Masukkan Alamat Saksi">
                                    </div>
                                    <div class="form-group">
                                        <label for="namasaksi2">Nama Saksi 2</label>
                                        <input type="text" name="namasaksi2" class="form-control" value="{{ $data->namasaksi2 }}" id="namasaksi2" placeholder="Masukkan Nama Saksi">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatsaksi2">Alamat Saksi 2</label>
                                        <input type="text" name="alamatsaksi2" class="form-control" value="{{ $data->alamatsaksi2 }}" id="alamatsaksi2" placeholder="Masukkan Alamat Saksi">
                                    </div>
                                    <div class="form-group">
                                        <label for="alatbukti1">Alat Bukti 1</label>
                                        <input type="text" name="alatbukti1" class="form-control" value="{{ $data->alatbukti1 }}" id="alatbukti1" placeholder="Masukkan Alat Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="alatbukti2">Alat Bukti 2</label>
                                        <input type="text" name="alatbukti2" class="form-control" value="{{ $data->alatbukti2 }}" id="alatbukti2" placeholder="Masukkan Alat Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="alatbukti3">Alat Bukti 3</label>
                                        <input type="text" name="alatbukti3" class="form-control" value="{{ $data->alatbukti3 }}" id="alatbukti3" placeholder="Masukkan Alat Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="barangbukti1">Barang Bukti 1</label>
                                        <input type="text" name="barangbukti1" class="form-control" value="{{ $data->barangbukti1 }}" id="barangbukti1" placeholder="Masukkan Barang Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="barangbukti2">Barang Bukti 2</label>
                                        <input type="text" name="barangbukti2" class="form-control" value="{{ $data->barangbukti2 }}" id="barangbukti2" placeholder="Masukkan Barang Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="barangbukti3">Barang Bukti 3</label>
                                        <input type="text" name="barangbukti3" class="form-control" value="{{ $data->barangbukti3 }}" id="barangbukti3" placeholder="Masukkan Barang Bukti">
                                    </div>
                                    <div class="form-group">
                                        <label for="uraianpelanggaran">Uraian Pelanggaran (Mencakup 5W 1H)</label>
                                        <textarea name="uraianpelanggaran" class="form-control" value="{{ $data->uraianpelanggaran }}" id="uraianpelanggaran" placeholder="Masukkan Uraian Pelanggaran" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faktaketpelanggaran">Fakta & Keterangan Pelanggaran</label>
                                        <input type="text" name="faktaketpelanggaran" class="form-control" value="{{ $data->faktaketpelanggaran }}" id="faktaketpelanggaran" placeholder="Masukkan Fakta & Keterangan Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="analisapelanggaran">Analisa Pelanggaran</label>
                                        <input type="text" name="analisapelanggaran" class="form-control" value="{{ $data->analisapelanggaran }}" id="analisapelanggaran" placeholder="Masukkan Analisa Pelanggaran">
                                    </div>
                                    <div class="form-group">
                                        <label for="pesertasengketa">Peserta Sengketa</label>
                                        <input type="text" name="pesertasengketa" class="form-control" value="{{ $data->pesertasengketa }}" id="pesertasengketa" placeholder="Masukkan Peserta Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatsengketa">Tempat Sengketa</label>
                                        <input type="text" name="tempatsengketa" class="form-control" value="{{ $data->tempatsengketa }}" id="tempatsengketa" placeholder="Masukkan Tempat Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="waktusengketa">Waktu Sengketa</label>
                                        <input type="text" name="waktusengketa" class="form-control" value="{{ $data->waktusengketa }}" id="waktusengketa" placeholder="Masukkan Waktu Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="bentuksengketa">Bentuk Sengketa</label>
                                        <input type="text" name="bentuksengketa" class="form-control" value="{{ $data->bentuksengketa }}" id="bentuksengketa" placeholder="Masukkan Bentuk Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="identitassengketa">Identitas Sengketa</label>
                                        <input type="text" name="identitassengketa" class="form-control" value="{{ $data->identitassengketa }}" id="identitassengketa" placeholder="Masukkan Identitas Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="haritanggalsengketa">Hari & Tanggal Sengketa</label>
                                        <input type="text" name="haritanggalsengketa" class="form-control" value="{{ $data->haritanggalsengketa }}" id="haritanggalsengketa" placeholder="Masukkan Hari & Tanggal Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="kerugiansengketa">Kerugian Sengketa</label>
                                        <input type="text" name="kerugiansengketa" class="form-control" value="{{ $data->kerugiansengketa }}" id="kerugiansengketa" placeholder="Masukkan Kerugian Sengketa">
                                    </div>
                                    <div class="form-group">
                                        <label for="uraiansengketa">Uraian Sengketa (Mencakup 5W 1H)</label>
                                        <textarea name="uraiansengketa" class="form-control" value="{{ $data->uraiansengketa }}" id="uraiansengketa" placeholder="Masukkan Uraian Sengketa" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalttd">Tanggal Surat Ditanda Tangani</label>
                                        <input type="text" name="tanggalttd" class="form-control" value="{{ $data->tanggalttd }}" id="tanggalttd" placeholder="Masukkan Tanggal Surat Ditanda Tangani">
                                    </div>
                                    <div class="form-group">
                                        <label for="namattdpelaksana">Nama Pelaksana Tugas</label>
                                        <input type="text" name="namattdpelaksana" class="form-control" value="{{ $data->namattdpelaksana }}" id="namattdpelaksana" placeholder="Masukkan Nama Pelaksana Tugas">
                                    </div>
                                    @if ($data->image)
                                    <img src="{{ asset('storage/image-user/' . $data->image) }}" width="100" height="100px" alt="">
                                    @endif
                                    <div class="form-group">
                                        <label for="image">Photo</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <small>Upload foto jika ingin menggantinya</small>

                                    </div>

                                    @if ($data->image2)
                                    <img src="{{ asset('storage/image2-user/' . $data->image2) }}" width="100" height="100px" alt="">
                                    @endif
                                    <div class="form-group">
                                        <label for="image2">Photo</label>
                                        <input type="file" class="form-control" id="image2" name="image2">
                                        <small>Upload foto jika ingin menggantinya</small>

                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->



                    </div>
                    <!--/.col (left) -->

                </div>

            </form>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


</div>
@endsection