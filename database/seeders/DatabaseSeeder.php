<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Baby;
use App\Models\Child;
use App\Models\Mother;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'status' => 1
        ]);
        Admin::create([
            'nama' => 'Admin 1',
            'no_hp' => '091238429238',
            'user_id' => 1
        ]);

        User::create([
            'username' => 'user',
            'password' => Hash::make('user'),
            'role' => 'mother',
            'status' => 1
        ]);
        Mother::create([
            'nama' => 'Ibu dari',
            'no_hp' => '083428349534',
            'umur' => 23,
            'berat_badan' => 60,
            'tinggi_badan' => 159,
            'user_id' => 2
        ]);
        Baby::create([
            'nama' => 'Anak dari',
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => date('Y-m-d H:i:s'),
            'berat_badan' => 10,
            'tinggi_badan' => 40,
            'mother_id' => 1
        ]);
    }
}
