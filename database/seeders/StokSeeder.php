<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'stok_masuk' => rand(10, 50),
                'stok_keluar' => rand(1, 10),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
