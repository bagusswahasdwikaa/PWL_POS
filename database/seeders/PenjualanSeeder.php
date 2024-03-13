<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Atha',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => '2024-03-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Silva',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => '2024-03-02',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Daffa',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => '2024-03-03',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Bob Marley',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => '2024-03-04',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Azka',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => '2024-03-05',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Rifki',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => '2024-03-06',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Innasa',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => '2024-03-07',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Firman',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => '2024-03-08',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Naufal',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => '2024-03-09',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Farel',
                'penjualan_kode' => 'P010',
                'penjualan_tanggal' => '2024-03-10',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
