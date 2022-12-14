<?php

namespace App\Database\Seeds;

use App\Models\PemeriksaanModel;
use CodeIgniter\Database\Seeder;

class PemeriksaanSeeder extends Seeder
{
    public function run()
    {
        $id = (new PemeriksaanModel())->insert([
            'tgl'                  => '2013-03-13 13:30:00',            
            'kendaraan_id'         => '1',            
            'kilometer_skr'        => '25',            
            'catatan'              => 'Kendaraan Pertama',            
            'sa_karyawan_id'       => '1',            
            'mon_karyawan_id'      => '1',            
            'tagihan'              => '90',            
            'statuspemeriksaan_id' => '1',            
        ]);
        echo "hasil id = $id";
    }
}
