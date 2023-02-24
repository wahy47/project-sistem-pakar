<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\TesStore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function regis(Request $request)
    {
        $request->validate([
            'nope' => 'required|regex:/^[0][8][0-9]{8,}/u|max:14',
            'nama' => 'required|regex:/^[a-zA-Z ]+$/u',
            'usia' => 'required|regex:/^[0-9]+$/u|max:2',
            'jenisKelamin' => 'regex:/^Perempuan$/u',
            'pass' => 'required|min:8'
        ]);
        $store = [
            'nama' => $request->nama,
            'nope' => $request->nope,
            'email' => "-",
            'usia' => $request->usia,
            'usia_pernikahan' => $request->usiaPernikahan,
            'jenis_kelamin' => "Perempuan",
            'alamat' => $request->alamat,
            'password' => Hash::make($request->pass),
            'unhash' => $request->pass,
            'role' => "pasien"
        ];

        $check = User::where('nope', $request->nope)->first();
        if ($check) {
            Session::flash('exist', 'Nomor HP Sudah Terdaftar');
            return back();
        }

        User::create($store);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'nope' => $request->nope,
            'password' => $request->pass
        ];

        $credentials2 = [
            'email' => $request->nope,
            'password' => $request->pass
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == "pasien") {
                return redirect()->intended('/tes');
            } elseif (auth()->user()->role == "admin") {
                return redirect()->intended('/pasien');
            }
        } elseif (Auth::attempt($credentials2)) {
            if (auth()->user()->role == "expert") {
                return redirect()->intended('/penyakit');
            } elseif (auth()->user()->role == "admin") {
                return redirect()->intended('/pasien');
            }
        }

        return back()->with('loginerror', 'Email/Nomor HP atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function semuaPasien()
    {
        return view('expert.pasien', [
            'pasien' => User::all(),
            'navbarPenyakit' => Penyakit::all()
        ]);
    }

    public function detailPasien($id)
    {
        return view('expert.detail_pasien', [
            'data' => Pasien::where('user_id', $id)->get(),
            'gejala' => TesStore::where('user_id', $id)->get(),
            'pasien' => User::find($id),
            'navbarPenyakit' => Penyakit::all()
        ]);
    }

    public function profilExpert()
    {
        return view('admin.profil', [
            'navbarPenyakit' => Penyakit::all()
        ]);
    }

    public function updateProfilExpert(Request $request)
    {
        $data = User::find(auth()->user()->id);

        $data->update([
            'nama' => $request->nama,
            'nope' => $request->nope,
            'usia' => $request->usia,
            'alamat' => $request->alamat
        ]);

        if ($request->pass != "") {
            $data->update([
                "password" => Hash::make($request->pass)
            ]);
        }

        return redirect('/profil');
    }
}
