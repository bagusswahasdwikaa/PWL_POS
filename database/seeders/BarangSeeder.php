<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [ 
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'EL001',
                'barang_nama' => 'Laptop Acer Aspire 5',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'EL002',
                'barang_nama' => 'Smartphone Samsung Galaxy S21',
                'harga_beli' => 8000000,
                'harga_jual' => 9000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'FA001',
                'barang_nama' => 'T-shirt Adidas Originals',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'FA002',
                'barang_nama' => 'Jeans Levi\'s 501',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'ART001',
                'barang_nama' => 'Panci Stainless Steel',
                'harga_beli' => 150000,
                'harga_jual' => 180000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'ART002',
                'barang_nama' => 'Set Piring Makan (6 Pcs)',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'OT001',
                'barang_nama' => 'Mobil Honda Civic',
                'harga_beli' => 250000000,
                'harga_jual' => 280000000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'OT002',
                'barang_nama' => 'Sepeda Motor Yamaha NMAX',
                'harga_beli' => 30000000,
                'harga_jual' => 35000000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'OR001',
                'barang_nama' => 'Bola Sepak Nike Strike',
                'harga_beli' => 50000,
                'harga_jual' => 60000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'OR002',
                'barang_nama' => 'Dumbbell Set 20 Kg',
                'harga_beli' => 400000,
                'harga_jual' => 450000,
            ],
        ];
        
        DB::table('m_barang')->insert($data);       
    }   
}
