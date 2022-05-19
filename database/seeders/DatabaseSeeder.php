<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data =array([
         
            'username'=>'santaromauli',
            'password'=>Hash::make('waqwaq12'),
        ]);
        foreach ($data as $d) {
            User::create([
                'username' => $d['username'],
                'password' => $d['password'],
                
            ]);
        }
    }
}
