<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Echo_;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $data = User::get();

        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [

                'nomersurat' => 'required',
                'tahapanawasi' => 'required',
                'image' => 'mimes:png,jpg,jpeg|max:5120',
                'image2' => 'mimes:png,jpg,jpeg|max:5120',
            ],
            [

                'nomersurat.required' => 'nomer surat wajib diisi',
                'tahapanawasi.required' => 'tahapan yang diawasi wajib diisi',
            ]
        );
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // Handle the first image
        $filename = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = date('Y-m-d') . $image->getClientOriginalName();
            $path = 'image-user/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($image));
        }

        // Handle the second image
        $filename2 = null;
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $filename2 = date('Y-m-d') . $image2->getClientOriginalName();
            $path = 'image2-user/' . $filename2;
            Storage::disk('public')->put($path, file_get_contents($image2));
        }


        $data = $request->all();
        $data['nomersurat'] = $request->nomersurat;
        $data['tahapanawasi'] = $request->tahapanawasi;
        $data['pelaksanapengawasan1'] = $request->pelaksanapengawasan1;
        $data['pelaksanapengawasan2'] = $request->pelaksanapengawasan2;
        $data['pelaksanapengawasan3'] = $request->pelaksanapengawasan3;
        $data['pelaksanapengawasan4'] = $request->pelaksanapengawasan4;
        $data['pelaksanapengawasan5'] = $request->pelaksanapengawasan5;
        $data['pelaksanapengawasan6'] = $request->pelaksanapengawasan6;
        $data['pelaksanapengawasan7'] = $request->pelaksanapengawasan7;
        $data['pelaksanapengawasan8'] = $request->pelaksanapengawasan8;
        $data['pelaksanapengawasan9'] = $request->pelaksanapengawasan9;
        $data['pelaksanapengawasan10'] = $request->pelaksanapengawasan10;
        $data['jabatan'] = $request->jabatan;
        $data['nomerperintah1'] = $request->nomerperintah1;
        $data['nomerperintah2'] = $request->nomerperintah2;
        $data['alamat'] = $request->alamat;
        $data['bentukkeg'] = $request->bentukkeg;
        $data['tujuankeg'] = $request->tujuankeg;
        $data['sasarankeg'] = $request->sasarankeg;
        $data['waktutempatkeg'] = $request->waktutempatkeg;
        $data['hasilpengawasan'] = $request->hasilpengawasan;
        $data['peristiwapelanggaran'] = $request->peristiwapelanggaran;
        $data['hasilpengawasan'] = $request->hasilpengawasan;
        $data['waktupelanggaran'] = $request->waktupelanggaran;
        $data['pelakupelanggaran'] = $request->pelakupelanggaran;
        $data['alamatpelanggaran'] = $request->alamatpelanggaran;
        $data['namasaksi1'] = $request->namasaksi1;
        $data['alamatsaksi1'] = $request->alamatsaksi1;
        $data['namasaksi2'] = $request->namasaksi2;
        $data['alamatsaksi2'] = $request->alamatsaksi2;
        $data['alatbukti1'] = $request->alatbukti1;
        $data['alatbukti2'] = $request->alatbukti2;
        $data['alatbukti3'] = $request->alatbukti3;
        $data['barangbukti1'] = $request->barangbukti1;
        $data['barangbukti2'] = $request->barangbukti2;
        $data['barangbukti3'] = $request->barangbukti3;
        $data['uraianpelanggaran'] = $request->uraianpelanggaran;
        $data['faktaketpelanggaran'] = $request->faktaketpelanggaran;
        $data['analisapelanggaran'] = $request->analisapelanggaran;
        $data['pesertasengketa'] = $request->pesertasengketa;
        $data['tempatsengketa'] = $request->tempatsengketa;
        $data['waktusengketa'] = $request->waktusengketa;
        $data['bentuksengketa'] = $request->bentuksengketa;
        $data['identitassengketa'] = $request->identitassengketa;
        $data['haritanggalsengketa'] = $request->haritanggalsengketa;
        $data['kerugiansengketa'] = $request->kerugiansengketa;
        $data['uraiansengketa'] = $request->uraiansengketa;
        $data['tanggalttd'] = $request->tanggalttd;
        $data['namattdpelaksana'] = $request->namattdpelaksana;
        $data['image'] = $filename;
        $data['image2'] = $filename2;



        User::create($data);

        return redirect()->route('index');
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);


        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input form
        $validator = Validator::make(
            $request->all(),
            [
                'nomersurat' => 'required',
                'tahapanawasi' => 'required',
                'image' => 'mimes:png,jpg,jpeg|max:5120',
                'image2' => 'mimes:png,jpg,jpeg|max:5120',
            ],
            [
                'nomersurat.required' => 'Nomer surat wajib diisi',
                'tahapanawasi.required' => 'Tahapan yang diawasi wajib diisi',
            ]
        );

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = User::find($id);

        $data = $request->only([
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

        ]);

        $image      = $request->file('image');

        if ($image) {

            $filename   = date('Y-m-d') . $image->getClientOriginalName();
            $path       = 'image-user/' . $filename;

            if ($find->image) {
                Storage::disk('public')->delete('image-user/' . $find->image);
            }

            Storage::disk('public')->put($path, file_get_contents($image));

            $data['image']      = $filename;
        }

        $image2      = $request->file('image2');

        if ($image2) {

            $filename2   = date('Y-m-d') . $image2->getClientOriginalName();
            $path       = 'image2-user/' . $filename2;

            if ($find->image2) {
                Storage::disk('public')->delete('image2-user/' . $find->image2);
            }

            Storage::disk('public')->put($path, file_get_contents($image2));

            $data['image2']      = $filename2;
        }

        $find->update($data);

        return redirect()->route('index');
    }


    public function delete(Request $request, $id)
    {
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('index');
    }

    public function cetakPdf($id)
    {
        // Ambil data berdasarkan ID
        $data = User::findOrFail($id);

        // Cek apakah gambar pertama ada
        if ($data->image) {
            $imagePath = storage_path('app/public/image-user/' . $data->image);
            if (file_exists($imagePath)) {
                $data['image'] = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents($imagePath));
            } else {
                $data['image'] = null;
            }
        } else {
            $data['image'] = null;
        }

        // Cek apakah gambar kedua ada
        if ($data->image2) {
            $image2Path = storage_path('app/public/image2-user/' . $data->image2);
            if (file_exists($image2Path)) {
                $data['image2'] = 'data:image/' . pathinfo($image2Path, PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents($image2Path));
            } else {
                $data['image2'] = null;
            }
        } else {
            $data['image2'] = null;
        }

        // Buat PDF dari tampilan
        $pdf = Pdf::setOptions(['isRemoteEnabled' => true])
            ->loadView('cetakpdf', compact('data'));

        // Unduh atau tampilkan PDF di browser
        return $pdf->stream('laporanforma.pdf');
    }
}
