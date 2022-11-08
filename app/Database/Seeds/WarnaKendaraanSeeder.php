<?php

namespace App\Database\Seeds;

use App\Database\Migrations\WarnaKendaraan;
use App\Models\WarnaKendaraan as WarnaKendaraanModel;
use App\Models\WarnaKendaraanModel as ModelsWarnaKendaraanModel;
use CodeIgniter\Database\Seeder;

class WarnaKendaraanSeeder extends Seeder
{
    public function run()
    {
        $id = (new ModelsWarnaKendaraanModel())->insert([
            'warna' => 'Hijau',
        ]);
        echo "hasil id = $id";
    }
}
