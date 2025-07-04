<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Buku;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'username',
            'email' => 'email@gmail.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Seeder data anggota
        Anggota::create([
            'nama' => 'Budi Santoso',
            'jekel' => 'Laki-laki',
            'kelas' => '07',
            'no_hp' => '081234567890',
        ]);
        Anggota::create([
            'nama' => 'Siti Aminah',
            'jekel' => 'Perempuan',
            'kelas' => '06',
            'no_hp' => '082233445566',
        ]);
        // Seeder data buku
        Buku::create([
            'judul_buku' => 'Filosofi Teras',
            'pengarang' => 'Henry Manampiring',
            'penerbit' => 'Kompas',
            'th_terbit' => 2018,
            'kategori' => 'Fiksi',
            'cover' => 'teras.png',
        ]);
        Buku::create([
            'judul_buku' => '365 Tips Sehat ala Rasulullah',
            'pengarang' => 'dr. Mohammad Ali Toha Assegaf',
            'penerbit' => 'Quanta',
            'th_terbit' => 2017,
            'kategori' => 'Nonfiksi',
            'cover' => '365.png',
        ]);
    }
}
