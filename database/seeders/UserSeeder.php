<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =  [
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('12345678'),
        ];

        User::updateOrCreate(
            ['email' => 'admin@app.com' ],
            $data
        );

    }
}
