<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profil = Auth::user();
        $user = User::with('admin')->where('id', $profil->id)->first();

        return view('pages.profile.index');
    }
}
