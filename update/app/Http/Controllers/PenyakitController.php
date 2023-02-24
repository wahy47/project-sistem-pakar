<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Gejala;
use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\TesStore;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class PenyakitController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'data' => Penyakit::all(),
            'navbarPenyakit' => Penyakit::all()
        ]);
    }

    public function penyakitBaru(Request $request)
    {
        if ($request->value != "") {
            $data = Penyakit::create(['penyakit' => $request->value]);
            return response($data->id);
        }
    }

    public function hapusPenyakit(Request $request)
    {
        $data = Penyakit::find($request->id);
        $data->bobot()->delete();
        $data->delete();

        //tes-stores
        $tes = TesStore::where('penyakit_id', $request->id)->get();
        foreach ($tes as $key) {
            $key->delete();
        }

        //pasien
        $pasien = Pasien::where('penyakit_id', $request->id)->get();
        foreach ($pasien as $key) {
            $key->delete();
        }

        return redirect('/penyakit');
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        if ($id == "") {
            return view('admin.detail', [
                'check' => "new",
                'penyakit' => "",
                'bobot' => Bobot::where('penyakit_id', $id)->get(),
                'gejala' => "",
                'navbarPenyakit' => Penyakit::all()
            ]);
        } else {
            return view('admin.detail', [
                'check' => "edit",
                'penyakit' => Penyakit::find($id),
                'bobot' => Bobot::where('penyakit_id', $id)->get(),
                'gejala' => Gejala::all(),
                'navbarPenyakit' => Penyakit::all()
            ]);
        }
    }

    public function tambahGejala($id, Request $request)
    {
        $gejala_id = Gejala::where('gejala', $request->inputGejala)->first();

        (float)$positifPresent = $request->bobot;
        (float)$positifAbsent = 1 - $positifPresent;
        (float)$negatifPresent = $positifAbsent;
        (float)$negatifAbsent = $positifPresent;

        (float)$positifPresent = $positifPresent * $positifPresent;
        (float)$positifAbsent = $positifAbsent * $positifAbsent;

        $x = $positifPresent / ($positifAbsent + $positifPresent);

        $nilai = round($x, 3);
        $store = [
            'penyakit_id' => $id,
            'gejala_id' => $gejala_id->id,
            'bobot' => $request->bobot,
            'nilai' => $nilai
        ];

        Bobot::create($store);
        return redirect('/detail?id=' . $id);
    }

    public function kurangiGejala($id, Request $request)
    {
        $data = Bobot::find($request->id);
        $gejala_id = $data->gejala_id;
        $data->delete();

        //tes-stores
        $tes = TesStore::where('gejala_id', $gejala_id)->get();
        foreach ($tes as $key) {
            $key->delete();
        }

        return redirect('/detail?id=' . $id);
    }

    public function saveBobot(Request $request)
    {
        $data = Bobot::find($request->id);

        (float)$positifPresent = $request->bobot; //0,6
        (float)$positifAbsent = 1 - $positifPresent;
        (float)$negatifPresent = $positifAbsent;
        (float)$negatifAbsent = $positifPresent;

        (float)$positifPresent = $positifPresent * $positifPresent;
        (float)$positifAbsent = $positifAbsent * $positifAbsent;

        $x = $positifPresent / ($positifAbsent + $positifPresent);

        $nilai = round($x, 3);

        $data->update(['bobot' => $request->bobot, 'nilai' => $nilai]);
    }

    public function editNamaPenyakit(Request $request)
    {
        $data = Penyakit::find($request->id);
        $data->update(['penyakit' => $request->value]);
    }
}
