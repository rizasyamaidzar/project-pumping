<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Mother;
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
    public function listUser()
    {
        $listUser = Mother::all();
        return view('pages.users.index', [
            'listUser' => $listUser
        ]);
    }
}
