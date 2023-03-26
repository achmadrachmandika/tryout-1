<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $users = [
            // ['name' => 'yono',
            // 'username' => 'Siswa2',
            // 'password' => bcrypt('123'),
            // 'email' => 'deaasss@gmail.com',
            // 'telepon' => '0852229339',
            // 'role' => '0'],
            ['name' => 'Rizky Randal',
            'username' => 'Admin2',
            'password' => bcrypt('123'),
            'email' => 'rizky@gmail.com',
            'telepon' => '0858930512',
            'role' => '1'],
        ];
        foreach($users as $user)
        {
            User::create($user);
        }
    }
}