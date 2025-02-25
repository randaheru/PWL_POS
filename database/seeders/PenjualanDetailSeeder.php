<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 10);
                $jumlah = rand(1, 5);
                $harga = DB::table('m_barang')->where('barang_id', $barang_id)->value('harga');
                $subtotal = $jumlah * $harga;

                $data[] = [
                    'penjualan_detail_id' => (($i - 1) * 3) + $j,
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'jumlah' => $jumlah,
                    'subtotal' => $subtotal,
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
