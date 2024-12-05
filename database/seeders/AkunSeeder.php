<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin satu',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'), // ini passwordnya dan saat udah selesai hapus ini password sebagai pengingat
                'level' => 'admin',
                // 'password' => '$2a$12$I.t1yUmgEPnP7rSHP392de5usQR.ULKBs1UrRNlg2ve7Aa6kSQfra',
            ],
            [
                'name' => 'Admin dua',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin123'),
                'level' => 'admin',
                // 'password' => '$2a$12$PpcXD7/RlrH6IBSBebzBLeLWopPjl/snGHobibBN8lk6sv1yT.hGe',
            ],
            [
                'name' => 'User satu',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user123'),
                'level' => 'user',
                // 'password' => '$2a$12$PpcXD7/RlrH6IBSBebzBLeLWopPjl/snGHobibBN8lk6sv1yT.hGe',
            ],
            [
                'name' => 'User dua',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user123'),
                'level' => 'user',
                // 'password' => '$2a$12$PpcXD7/RlrH6IBSBebzBLeLWopPjl/snGHobibBN8lk6sv1yT.hGe',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
