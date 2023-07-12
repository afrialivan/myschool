<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'home',
            'siswa' => User::where('role', 'siswa')->get(),
            'absen' => Absen::latest()->get(),
            'hadir' => Absen::where('status', 'hadir')->get(),
            'izin' => Absen::where('status', 'izin')->orWhere('status', 'sakit')->get(),
            'alpa' => Absen::where('status', 'alpa')->get(),
        ]);
    }
    public function absensi()
    {
        return view('admin.absensi.kelas', [
            'title' => ''
        ]);
    }
    public function siswa()
    {
        return view('admin.akun.siswa', [
            'title' => '',
            'users' => User::where('role', 'siswa')->latest()->paginate(10)
        ]);
    }
    public function tambahSiswa()
    {
        return view('admin.akun.tambah-siswa', [
            'title' => '',
            'kelas' => Kelas::all()
        ]);
    }
    public function register(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'id_kelas' => 'required',
            'password' => 'required',
        ]);

        $validasi['password'] = bcrypt($validasi['password']);

        User::create($validasi);

        return redirect('/dashboard/akun-siswa');
    }
    public function kelas()
    {
        return view('admin.kelas.index', [
            'title' => '',
            'kelas' => Kelas::all()
        ]);
    }
    public function storeKelas(Request $request)
    {
        $validasi = $request->validate([
            'kelas' => 'required',
            'walikelas' => 'required',
        ]);

        Kelas::create($validasi);

        return redirect('/dashboard/kelas');
    }
}
