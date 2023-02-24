<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ExpertController extends Controller
{
    public function index()
    {
        return view('expert.expert', [
            'data' => User::where('role', 'expert')->get()
        ]);
    }

    public function detailExpert($id)
    {
        return view('expert.detail_expert', [
            'data' => User::find($id)
        ]);
    }

    public function updateDataExpert($id, Request $request)
    {

        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|email:rfc,dns',
            'usia' => 'required|regex:/^[0-9]+$/u|max:2',
            'alamat' => 'required',
            'pass' => 'required|min:8',
            'role' => "expert"
        ]);

        $data = User::find($id);

        $data->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->pass),
            'unhash' => $request->pass
        ]);

        return redirect('/detail-expert' . '/' . $id);
    }

    public function tambahExpert()
    {
        return view('expert.tambah_expert');
    }

    public function storeExpert(Request $request)
    {

        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|email:rfc,dns',
            'usia' => 'required|regex:/^[0-9]+$/u|max:2',
            'alamat' => 'required',
            'pass' => 'required|min:8',
            'role' => "expert"
        ]);
        $store = [
            'nama' => $request->nama,
            'nope' => "-",
            'email' => $request->email,
            'usia' => $request->usia,
            'usia_pernikahan' => "1",
            'jenis_kelamin' => "-",
            'alamat' => $request->alamat,
            'password' => Hash::make($request->pass),
            'unhash' => $request->pass,
            'role' => "expert"
        ];

        $data = User::create($store);

        return redirect('/detail-expert' . '/' . $data->id);
    }

    public function hapusExpert($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/data-expert');
    }
}
