<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Gejala;
use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\TesStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    public function tes()
    {
        $status = Pasien::where('user_id', auth()->user()->id)->first();
        //echo $status;
        if (!empty($status->id)) {
            return redirect('/hasil');
        } else {
            return view('tes', []);
        }
    }

    public function tesUlang()
    {
        $data = Pasien::where('user_id', auth()->user()->id)->get();
        $store = TesStore::where('user_id', auth()->user()->id)->get();
        foreach ($data as $key) {
            $key->delete();
        }
        foreach ($store as $key) {
            $key->delete();
        }
        return redirect('/tes');
    }

    public function hasilTes()
    {

        $status = Pasien::where('user_id', auth()->user()->id)->first();
        $pasien = DB::table('pasiens')->select('penyakit_id')->where('user_id', auth()->user()->id);

        $penyakit = Bobot::whereIn('id', $pasien)->get();

        if (!empty($status->id)) {

            $maxValue = Pasien::where('user_id', auth()->user()->id)->max('nilai');
            $penyakitId = Pasien::where('user_id', auth()->user()->id)->where('nilai', $maxValue)->first();

            return view('hasil_b', [
                'data' => Pasien::where('user_id', auth()->user()->id)->get(),
                'gejala' => TesStore::where('user_id', auth()->user()->id)->where('penyakit_id', $penyakitId->penyakit_id)->get(),
                'penyakit' => Penyakit::find($penyakitId->penyakit_id)
            ]);
            // return view('hasil', [
            //     'data' => Pasien::where('user_id', auth()->user()->id)->get(),
            //     'ocd' => TesStore::where('user_id', auth()->user()->id)->where('penyakit_id', 18)->get(),
            //     'anx' => TesStore::where('user_id', auth()->user()->id)->where('penyakit_id', 19)->get(),
            //     'dep' => TesStore::where('user_id', auth()->user()->id)->where('penyakit_id', 20)->get()
            // ]);
        } else {
            return redirect('/tes');
        }
    }

    public function submitTes()
    {
        $penyakit = Penyakit::all();
        $tes = TesStore::where('user_id', auth()->user()->id)->get();
        $bobots = Bobot::all();
        $all = 0;
        foreach ($bobots as $z) {
            $all = $all + $z->nilai;
        }
        //echo "pembagi | " . $all . " |  <br><br>";
        foreach ($penyakit as $key) {
            $bobot = Bobot::where('penyakit_id', $key->id)->get();
            $counts = 0;
            foreach ($bobot as $x) {
                $counts = $counts + $x->nilai;
            }
            //echo "pembagi | " . $counts . " |  <br><br>";
            $total = 0;
            $count = 0;
            $nilai = 0;
            $x = 0;
            $y = 0;
            foreach ($tes as $value) {

                $data = Bobot::where('penyakit_id', $key->id)->where('gejala_id', $value->gejala_id)->first();

                if (!empty($data->nilai)) {
                    echo $key->id . "-" . $value->gejala_id . "<br>";
                    $total = $total + $data->nilai;
                    $count = $count + 1;
                }
            }
            //echo " " . $key->id . "- total penjumlahan nilai = " . $total . " <br> ";
            if ($total != 0) {
                $nilai = ($total / $all);
                //echo $nilai;
                $x = $nilai * 100;
                $y = round($x);
                //echo $x;
            }
            //echo "  nilai persen  = " . $y . " %<br>";

            if ($x != 0) {
                $store = [
                    'user_id' => auth()->user()->id,
                    'penyakit_id' => $key->id,
                    'status' => 'submit',
                    'nilai' => $y
                ];

                //echo "store : penyakit -> " . $key->penyakit . "<br>nilai -> " . $y . "<br><br>";

                Pasien::create($store);
            }
        }
    }
}
