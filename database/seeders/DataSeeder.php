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
                'uj' => 50000, // Travel allowance for the trip
                'harga' => 150000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-02',
                'nopol' => 'B 5678 CD',
                'origin' => 'Jakarta',
                'destinasi' => 'Yogyakarta',
                'uj' => 60000, // Travel allowance for the trip
                'harga' => 200000,
                'status' => 'pending',
            ],
            [
                'tanggal' => '2024-11-03',
                'nopol' => 'B 9101 EF',
                'origin' => 'Jakarta',
                'destinasi' => 'Surabaya',
                'uj' => 70000., // Travel allowance for the trip
                'harga' => 250000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-04',
                'nopol' => 'B 1121 GH',
                'origin' => 'Jakarta',
                'destinasi' => 'Semarang',
                'uj' => 55000, // Travel allowance for the trip
                'harga' => 180000,
                'status' => 'confirmed',
            ],
            [
                'tanggal' => '2024-11-05',
                'nopol' => 'B 3141 IJ',
                'origin' => 'Jakarta',
                'destinasi' => 'Medan',
                'uj' => 80000, // Travel allowance for the trip
                'harga' => 300000,
                'status' => 'canceled',
            ],
        ]);
    }
}
