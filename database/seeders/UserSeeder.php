<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $adminRole = Role::where('slug','admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => Role::where('slug','admin')->first()->id,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            // 'status' => true
        ]);

        // Create user
        //$userRole = Role::where('slug','user')->first();
        User::updateOrCreate([
            'role_id' => Role::where('slug','user')->first()->id,
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'),
            // 'status' => true
        ]);
    }
}
