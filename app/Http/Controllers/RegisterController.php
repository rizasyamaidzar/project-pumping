<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        dd($request->all());
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
    }
}
