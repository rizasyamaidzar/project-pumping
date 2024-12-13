<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use App\Models\Mother;
use App\Models\Pumping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    //
    public function index()
    {
        // Variable kriteria ketentuan pumping perhari
        $kriteria = 0;

        $today = Carbon::today()->format('d M Y');
        $user = Auth::user();
        $baby = Baby::where('mother_id', $user->id)->first();
        $umur = round(\Carbon\Carbon::parse($baby->tanggal_lahir)->diffInMonths(\Carbon\Carbon::now()));
        $countUser = Mother::count();
        if ($umur < 1) {
            $kriteria = 12;
        } else if ($umur >= 1 && $umur < 6) {
            $kriteria = 8;
        } else {
            $kriteria = 6;
        }
        $currentReport = Pumping::where('tanggal', $today)->count();
        $progress = ($currentReport / $kriteria) * 100;


        // umur 1 bulan setiap 2 jam sekali | 24/2 = 12
        // umur lebih 1 bulan setiap 3 jam sekali | 24/3 = 8
        // umur 6 bulan lebih setiap 4 jam sekali | 24/4 = 6

        // mengambil umur bayi
        // menentukan kriteria dari umur
        // mencari count dari transaksi hari ini
        // menghitung rata rata transaksi hari ini/kriteria per umur * 100
        return view('pages.home', [
            'today' => $today,
            'baby' => $baby,
            'countUser' => $countUser,
            'progress' => (int)$progress
        ]);
    }
}
