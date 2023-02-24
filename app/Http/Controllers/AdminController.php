<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\PenyakitDeskripsi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('expert.index', [
            'data' => Penyakit::all()
        ]);
    }

    public function detailPenyakit(Request $request)
    {
        return view('expert.detail_penyakit', [
            'data' => Penyakit::find($request->id)
        ]);
    }

    public function saveDeskripsi($id, Request $request)
    {
        $data = PenyakitDeskripsi::where('penyakit_id', $id)->first();


        if ($data) {
            if ($request->deskripsi != "") {
                $data->update([
                    'deskripsi' => $request->deskripsi
                ]);
            }
            if ($request->penyebab != "") {
                $data->update([
                    'penyebab' => $request->penyebab
                ]);
            }
            if ($request->pengobatan != "") {
                $data->update([
                    'deskripsi' => $request->pengobatan
                ]);
            }
        } else {

            $request->validate([
                'deskripsi' => 'required',
                'penyebab' => 'required',
                'pengobatan' => 'required'
            ]);
            PenyakitDeskripsi::create([
                'penyakit_id' => $id,
                'deskripsi' => $request->deskripsi,
                'penyebab' => $request->penyebab,
                'pengobatan' => $request->pengobatan
            ]);
        }

        return redirect('/detail-penyakit?id=' . $id);
    }
}
