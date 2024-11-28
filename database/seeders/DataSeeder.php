<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data')->insert([
            [
                'tanggal' => '2024-11-01',
                'nopol' => 'B 1234 AB',
                'origin' => 'Jakarta',
                'destinasi' => 'Bandung',
                'uj' => 50000,
                'harga' => 150000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-02',
                'nopol' => 'B 5678 CD',
                'origin' => 'Jakarta',
                'destinasi' => 'Yogyakarta',
                'uj' => 60000,
                'harga' => 200000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-03',
                'nopol' => 'B 9101 EF',
                'origin' => 'Jakarta',
                'destinasi' => 'Surabaya',
                'uj' => 70000,
                'harga' => 250000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-04',
                'nopol' => 'B 1121 GH',
                'origin' => 'Jakarta',
                'destinasi' => 'Semarang',
                'uj' => 55000,
                'harga' => 180000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-05',
                'nopol' => 'B 3141 IJ',
                'origin' => 'Jakarta',
                'destinasi' => 'Medan',
                'uj' => 80000,
                'harga' => 300000,
                'status' => 'canceled',
            ],
            [
                'tanggal' => '2024-11-06',
                'nopol' => 'B 4132 KL',
                'origin' => 'Jakarta',
                'destinasi' => 'Malang',
                'uj' => 60000,
                'harga' => 220000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-07',
                'nopol' => 'B 5161 MN',
                'origin' => 'Jakarta',
                'destinasi' => 'Solo',
                'uj' => 45000,
                'harga' => 170000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-08',
                'nopol' => 'B 6172 OP',
                'origin' => 'Jakarta',
                'destinasi' => 'Bali',
                'uj' => 100000,
                'harga' => 500000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-09',
                'nopol' => 'B 7183 QR',
                'origin' => 'Jakarta',
                'destinasi' => 'Bandung',
                'uj' => 50000,
                'harga' => 150000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-10',
                'nopol' => 'B 8194 ST',
                'origin' => 'Jakarta',
                'destinasi' => 'Cirebon',
                'uj' => 40000,
                'harga' => 130000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-11',
                'nopol' => 'B 9205 UV',
                'origin' => 'Jakarta',
                'destinasi' => 'Bogor',
                'uj' => 30000,
                'harga' => 90000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-12',
                'nopol' => 'B 0216 WX',
                'origin' => 'Jakarta',
                'destinasi' => 'Pekanbaru',
                'uj' => 90000,
                'harga' => 400000,
                'status' => 'canceled',
            ],
            [
                'tanggal' => '2024-11-13',
                'nopol' => 'B 1227 YZ',
                'origin' => 'Jakarta',
                'destinasi' => 'Banjarmasin',
                'uj' => 120000,
                'harga' => 550000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-14',
                'nopol' => 'B 2238 AB',
                'origin' => 'Jakarta',
                'destinasi' => 'Makassar',
                'uj' => 140000,
                'harga' => 600000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-15',
                'nopol' => 'B 3249 CD',
                'origin' => 'Jakarta',
                'destinasi' => 'Manado',
                'uj' => 160000,
                'harga' => 700000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-16',
                'nopol' => 'B 4250 EF',
                'origin' => 'Jakarta',
                'destinasi' => 'Palembang',
                'uj' => 80000,
                'harga' => 250000,
                'status' => 'canceled',
            ],
            [
                'tanggal' => '2024-11-17',
                'nopol' => 'B 5261 GH',
                'origin' => 'Jakarta',
                'destinasi' => 'Batam',
                'uj' => 110000,
                'harga' => 350000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-18',
                'nopol' => 'B 6272 IJ',
                'origin' => 'Jakarta',
                'destinasi' => 'Lampung',
                'uj' => 70000,
                'harga' => 190000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-19',
                'nopol' => 'B 7283 KL',
                'origin' => 'Jakarta',
                'destinasi' => 'Medan',
                'uj' => 90000,
                'harga' => 300000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-20',
                'nopol' => 'B 8294 MN',
                'origin' => 'Jakarta',
                'destinasi' => 'Aceh',
                'uj' => 150000,
                'harga' => 700000,
                'status' => 'pending',
            ],
        ]);

    }
}
