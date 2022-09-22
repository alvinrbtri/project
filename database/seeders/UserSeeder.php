<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "role_id" => "1",
            "name" => "Administrator",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password"),
            "tgl_lahir" => "2002-01-01",
            "no_telp" => "085324237299",
            "kota" => "Cirebon",
        ]);

        User::create([
            "role_id" => "2",
            "name" => "User",
            "email" => "user@gmail.com",
            "password" => bcrypt("password"),
            "tgl_lahir" => "2002-02-02",
            "no_telp" => "085324237298",
            "kota" => "Indramayu",
        ]);


    }
}
