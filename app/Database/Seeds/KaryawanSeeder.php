<?php

namespace App\Database\Seeds;

use App\Models\Karyawan;
use App\Models\KaryawanModel;
use App\Models\KendaraanModel;
use App\Models\Statuspemeriksaan;
use App\Models\StatuspemeriksaanModel;
use CodeIgniter\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $id = (new KaryawanModel())->insert([
            'nama_lengkap'  => 'Riski Pratama',
            'email'         => 'riskipratama@gmail.com',
            'nohp'          => '089527384716',
            'alamat'        => 'Jl. Extra Joss',
            'kota'          => 'Pontianak',
            'sandi'         => password_hash('12345', PASSWORD_BCRYPT),
            'token_reset'   => '',
            'level'         => 'MAN',
        ]);
        echo "hasil id = $id";
        
    }
}
