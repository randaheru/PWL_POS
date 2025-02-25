<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => rand(1, 3),
                'tanggal' => now()->subDays(rand(1, 30)),
                'total_harga' => 0, // Akan dihitung di t_penjualan_detail
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
