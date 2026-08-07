<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::firstOrCreate(
            ['email' => 'support@chasedevere.live'],
            [
                'name' => 'Admin',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
