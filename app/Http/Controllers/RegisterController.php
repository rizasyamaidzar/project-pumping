<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use App\Models\Mother;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $validateData = $request->validate([
            // untuk mama
            "nama" => "required",
            "no_hp" => "required",
            "umur" => "required",
            "berat_badan" => "required",
            "tinggi_badan" => "required",
            // untuk bayi
            "nama_bayi" => "required",
            "jenis_kelamin" => "required",
            "tanggal_lahir" => "required",
            "berat_badan_bayi" => "required",
            "tinggi_badan_bayi" => "required",
            // untuk tabel user
            "username" => "required",
            "password" => "required",
        ]);
        $user = User::create([
            "username" => $validateData['username'],
            "password" => Hash::make($validateData['password']),
            "role" => 'mother',
            "status" => 0,
        ]);
        $newUser = $user->id;

        $mother = Mother::create([
            "nama" => $validateData['nama'],
            "no_hp" => $validateData['no_hp'],
            "umur" => $validateData['umur'],
            "berat_badan" => $validateData['berat_badan'],
            "tinggi_badan" => $validateData['tinggi_badan'],
            "user_id" => $newUser,
        ]);
        $newMother = $mother->id;
        // ADD BAYI
        Baby::create([
            "nama" => $validateData['nama_bayi'],
            "jenis_kelamin" => $validateData['jenis_kelamin'],
            "tanggal_lahir" => $validateData['tanggal_lahir'],
            "berat_badan" => $validateData['berat_badan_bayi'],
            "tinggi_badan" => $validateData['tinggi_badan_bayi'],
            "mother_id" => $newMother,
        ]);

        return redirect('/')->with("success", "New Admin has been Added!");
    }
}
