<?php

namespace App\Database\Seeds;

use App\Models\Pelanggan as PelangganModel;
use App\Models\PelangganModel as ModelsPelangganModel;
use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $id = (new ModelsPelangganModel())->insert([
            'nama_depan' => 'Rino',
            'nama_belakang' => 'Hasbullah',
            'gender' => 'L',
            'alamat' => 'Jl.ninaja Gg.guaja block B.12',
            'kota' => 'Bandung',
            'notelp' => '+628 7652 4231',
            'hp' => 'Samsung Galaxy Duos',
            'email' => 'hasbullasilalahi@gmail.com',
            'tgl_daftar' => '11-09-2001',
        ]);
        echo "hasil id = $id";
    }
}
