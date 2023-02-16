<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => Hash::make('admin1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        foreach ($adminUser as $key => $user) {
            User::updateOrCreate(['id' => $user['id']], $user);
        }
    }
}
