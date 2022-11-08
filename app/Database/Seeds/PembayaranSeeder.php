<?php

namespace App\Database\Seeds;

use App\Models\Pembayaran;
use App\Models\PembayaranModel;
use CodeIgniter\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        $id = (new PembayaranModel())->insert([
            'pemeriksaan_id' => '1',
            'tgl_byr'=> '12-12-2012',
            'metodebayar_id' => '1',
            'dibayaroleh' => 'Rino',
            'catatan' => 'Pembayaran Berhasil',
            'karyawan_id' => '1',
        ]);
        echo "hasil id = $id";
    }
}
