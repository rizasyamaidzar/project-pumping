<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Mother;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function listAdmin()
    {
        $listAdmin = Admin::all();
        return view('pages.admin.index', [
            'listAdmin' => $listAdmin
        ]);
    }
    public function createAdmin(Request $request)
    {
        $validateData = $request->validate([
            // untuk mama
            "nama" => "required",
            "no_hp" => "required",
            // untuk tabel user
            "username" => "required",
            "password" => "required",
        ]);
        $user = User::create([
            "username" => $validateData['username'],
            "password" => Hash::make($validateData['password']),
            "role" => 'admin',
            "status" => 1,
        ]);
        $newUser = $user->id;
        Admin::create([
            "nama" => $validateData['nama'],
            "no_hp" => $validateData['no_hp'],
            "user_id" => $newUser,
        ]);
        return redirect()->back()->with("success", "New Admin has been Added!");
    }
    public function deleteAdmin(Request $request)
    {
        $admin = Admin::where('id', $request->id)->first();
        User::destroy($admin->user_id);
        return redirect()->back()->with("success", "Admin has been Delete!");
    }
    public function listUser()
    {
        $listUser = Mother::with('user')->get();
        return view('pages.users.index', [
            'listUser' => $listUser
        ]);
    }
    public function updateUser(Request $request)
    {
        $validateDate = $request->validate([
            "id" => "required",
            "status" => "sometimes|required",
        ]);
        User::where("id", $validateDate['id'])->update(['status' => $validateDate['status']]);
        return redirect()->back()->with("success", "User has been Edited!");
    }
    public function deleteUser(Request $request)
    {
        $user = Mother::where('id', $request->id)->first();
        User::destroy($user->user_id);
        return redirect()->back()->with("success", "User has been Delete!");
    }
}
