<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.index', [
            'title' => 'home',
            'absen' => Absen::where('id_user', auth()->user()->id)->latest()->paginate(5)
        ]);
    }
    public function absen() {
        return view('siswa.absen.absen', [
            'title' => 'home'
        ]);
    }
    public function absensi(Request $request, Absen $absen) {
        $validasi = $request->validate([
            'foto' => 'required',
            'status' => 'required'
        ]);
        $id_user = auth()->user()->id;

        $validasi['id_user'] = $id_user;
        Absen::create($validasi);

        return redirect('/');
    }
    public function kelas() {
        return view('siswa.kelas.index', [
            'title' => 'home',
            'kelas' => Kelas::all()
        ]);
    }
    public function kelasDetail(Kelas $kelas) {
        return view('siswa.kelas.kelas', [
            'title' => 'Kelas',
            'kelas' => $kelas,
            'users' => User::where('id_kelas', $kelas->id)->orderBy('nama', 'asc')->get()
        ]);
    }
}
