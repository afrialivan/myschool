<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'nama' => 'mimin',
            'nis' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('111'),
        ]);
        User::create([
            'nama' => 'A. Muh. Afrial Ivan Pratama',
            'nis' => '544201199',
            'id_kelas' => 1,
            'password' => bcrypt('111'),
        ]);
        User::create([
            'nama' => 'Muh. Daffah Putra Muharsyah',
            'nis' => '544201309',
            'id_kelas' => 1,
            'password' => bcrypt('12345678'),
        ]);

        Kelas::create([
            'walikelas' => 'Oktavianto',
            'kelas' => 'XII RPL',
        ]);
        Kelas::create([
            'walikelas' => 'Ikmal Akbar',
            'kelas' => 'XII TKJ 5',
        ]);
    }
}
