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
use App\Models\Pumping;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


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

        User::create([
            'username' => 'user2',
            'password' => Hash::make('user2'),
            'role' => 'mother',
            'status' => 1
        ]);
        Mother::create([
            'nama' => 'Ibu baik',
            'no_hp' => '083428349534',
            'umur' => 23,
            'berat_badan' => 60,
            'tinggi_badan' => 159,
            'user_id' => 3
        ]);
        Baby::create([
            'nama' => 'Anak baik',
            'jenis_kelamin' => 'perempuan',
            'tanggal_lahir' => date('Y-m-d H:i:s'),
            'berat_badan' => 10,
            'tinggi_badan' => 40,
            'mother_id' => 2
        ]);
        Pumping::factory(10)->create();
    }
}
