<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check delete existing user
        $user = User::delete();

        if ($user) {
            User::create([
                'name' => 'Emmanuel Sulle',
                'email' => 'sulleemmanule@gmail.com',
                'password' => Hash::make('111'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }


    }
}