<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\TesStore;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $data = Gejala::all();
        return view('admin.gejala', [
            'data' => $data,
            'navbarPenyakit' => Penyakit::all()
        ]);
    }

    public function gejalaBaru(Request $request)
    {
        $gejala = [
            "gejala" => $request->salue
        ];

        Gejala::create($gejala);
    }

    public function editGejala(Request $request)
    {
        $gejala = $request->value;
        $id = $request->id;
        $data = Gejala::find($id);


        if ($gejala == "") {
            //gejala
            $data->bobot()->delete();
            $data->delete();

            //bobot
            $bobot = Bobot::where('gejala_id', $id)->get();
            foreach ($bobot as $value) {
                $value->delete();
            }

            //tes-stores
            $tes = TesStore::where('gejala_id', $id)->get();
            foreach ($tes as $key) {
                $key->delete();
            }

            return response('reload');
        } else {
            $data->update(["gejala" => $gejala]);
            return response('edit');
        }
    }
}
