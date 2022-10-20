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
            'nama_depan' => 'Ridiculam',
            'nama_belakang' => 'Heist',
            'gender' => 'L',
            'alamat' => 'Jl.Morningstar Gg.Aqua block B.24',
            'kota' => 'Paris',
            'notelp' => '+628 5386 7913',
            'hp' => 'Xiaomi',
            'email' => 'morningstar@gmail.com',
            'tgl_daftar' => '11-09-2002',
        ]);
        echo "hasil id = $id";
    }
}
