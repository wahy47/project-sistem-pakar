<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\TesStore;
use Illuminate\Http\Request;

class TesStoreController extends Controller
{
    public function storeTes(Request $request)
    {
        $penyakit = Bobot::where('gejala_id', $request->value)->get();
        foreach ($penyakit as $value) {
            $store = [
                'user_id' => auth()->user()->id,
                'gejala_id' => $request->value,
                'penyakit_id' => $value->penyakit_id
            ];
            TesStore::create($store);
        }
    }

    public function removeTes(Request $request)
    {
        $data = TesStore::where('user_id', auth()->user()->id)->where('gejala_id', $request->value);
        $data->delete();
    }
}
