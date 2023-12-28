<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create(['name' => 'Admin','username' => 'admin','no_telp' => '087884111234','email' => 'admin@thena.com','role_id' => '1', 'kecamatan_id' => '1101010','kelurahan_id' => '1101010001', 'password' => Hash::make('12345678'),'email_verified_at'=> now(), 'created_at' => now(), 'rt' => '001', 'rw' => '001']);
        User::create(['name' => 'Admin','username' => 'admin','no_telp' => '087884111234','email' => 'admin@thena.com','role_id' => '1', 'kecamatan_id' => '1101010','kelurahan_id' => '1101010001', 'password' => Hash::make('12345678'),'email_verified_at'=> now(), 'created_at' => now(), 'rt' => '001', 'rw' => '001']);

    }
}
