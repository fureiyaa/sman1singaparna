<?php

namespace Database\Seeders;

use App\Models\profil_sekolah;
use App\Models\User;
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
            'name' => 'Test User',
            'username' => 'admin1',
            'password' => 'admin12345',
        ]);

        profil_sekolah::create([
            'nama_sekolah' => 'SMAN 1 Singaparna',
            'kepala_sekolah' => 'Drs. H. Nama Kepala Sekolah',
            'foto' => 'kepsok.jpg',
            'logo' => 'cocol.png',
            'npsn' => '20276001',
            'alamat' => 'Jl. Raya Singaparna No. 123, Tasikmalaya, Jawa Barat',
            'kontak' => '0265-123456',
            'visi_misi' => "Visi: Menjadi sekolah unggulan.\nMisi: Membentuk siswa berkarakter.",
            'tahun_berdiri' => 1985,
            'deskripsi' => 'SMA Negeri 1 Singaparna merupakan sekolah menengah atas di Kabupaten Tasikmalaya.',
        ]);
    }
}
