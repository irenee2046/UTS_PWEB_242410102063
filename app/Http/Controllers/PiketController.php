<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiketController extends Controller
{
    public function halamanLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $users=[
            'BPI' => 'bpi123',
            'PK' => 'pk123',
            'Ekraf' => 'ekraf123',
            'Medkraf' => 'medkraf123',
            'Litbang' => 'litbang123',
            'Humas' => 'humas123',
        ];

        if (isset($users[$username]) && $users[$username] === $password) {
            session(['username' => $username]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Username atau password salah!');
        }
        session(['username' => $username]);
        return redirect()->route('dashboard');
    }

    private function checkLogin()
    {
        if (!session()->has('username')) {
        return redirect()->route('login')->with('error', 'Silakan login dulu!');
        }
    }


    public function dashboard(Request $request)
    {
        if ($redirect = $this->checkLogin()) {
        return $redirect;
    }

        $username = session('username');

        $divisi = ['PK', 'Humas', 'Medkraf', 'Litbang', 'Ekraf', 'BPI'];
        $hariIndo = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        $tanggalSekarang = now();
        $jumlahHari = $tanggalSekarang->daysInMonth;

        $jadwalBulanIni = [];
    for ($i = 1; $i <= $jumlahHari; $i++) {
        $tanggal = now()->startOfMonth()->addDays($i - 1);
        $hari = $hariIndo[$tanggal->dayOfWeek];
        $divisiAcak = $divisi[array_rand($divisi)];

        $jadwalBulanIni[] = [
            'tanggal' => $tanggal->format('d-m-Y'),
            'hari' => $hari,
            'divisi' => $divisiAcak
        ];
    }

    return view('dashboard', [
        'username' => $username,
        'jadwalBulanIni' => $jadwalBulanIni
    ]);
}


    public function profile(Request $request)
    {
        if($redirect=$this->checkLogin()){
            return $redirect;
        }
        $username = session('username');
        return view('profile', ['username' => $username]);
    }

    public function listPiket(Request $request)
    {
        if($redirect=$this->checkLogin()){
            return $redirect;
        }
        $username = session('username');

        $jadwalPiket = [
            ['hari' => 'Senin', 'divisi' => 'PK'],
            ['hari' => 'Selasa', 'divisi' => 'Humas'],
            ['hari' => 'Rabu', 'divisi' => 'Medkraf'],
            ['hari' => 'Kamis', 'divisi' => 'Litbang'],
            ['hari' => 'Jumat', 'divisi' => 'Ekraf'],
            ['hari' => 'Sabtu', 'divisi' => 'BPI'],
        ];

        return view('pengelolaan', [
            'jadwalPiket' => $jadwalPiket,
            'username' => $username
        ]);
    }


    public function jadwal()
    {
        $username = session('username') ?? 'Pengguna';
        $jadwal = [
            ['tanggal' => '01-10-2025', 'hari' => 'Rabu', 'divisi' => 'Ekraf'],
            ['tanggal' => '02-10-2025', 'hari' => 'Kamis', 'divisi' => 'Humas'],
            ['tanggal' => '03-10-2025', 'hari' => 'Jumat', 'divisi' => 'PK'],
            ['tanggal' => '04-10-2025', 'hari' => 'Sabtu', 'divisi' => 'Litbang'],
            ['tanggal' => '05-10-2025', 'hari' => 'Minggu', 'divisi' => 'Medkraf'],
            ['tanggal' => '06-10-2025', 'hari' => 'Senin', 'divisi' => 'BPI'],

        ];

        return view('jadwal', compact('jadwal', 'username'));
    }

    public function profil()
    {
        return view('profil');
        }

    public function logout()
    {
    session()->flush();
    return redirect()->route('login')->with('success', 'Berhasil logout!');
    }


}
