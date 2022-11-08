<?php

namespace App\Database\Seeds;

use App\Models\Barangjasapemeriksaan;
use App\Models\BarangjasapemeriksaanModel;
use CodeIgniter\Database\Seeder;

class BarangjasapemeriksaanSeeder extends Seeder
{
    public function run()
    {
        $id = (new BarangjasapemeriksaanModel())->insert([
            'pemeriksaan_id' => '1',
            'barangjasa_id'=> '1',
            'qty' => '12',
            'harga_satuan' => '20',
        ]);
        echo "hasil id = $id";
    }
}
