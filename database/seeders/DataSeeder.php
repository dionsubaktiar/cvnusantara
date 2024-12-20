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
        $jsondata = '[
    {
        "tanggal": "2024-12-17",
        "nopol": "B 9785 KRU",
        "driver": null,
        "origin": "Manohara Surabaya",
        "destinasi": "Fb mm kranggan",
        "uj": "4200000",
        "harga": "5500000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "D 9212 VG",
        "driver": "Rijal",
        "origin": "Manohara",
        "destinasi": "IDM - DC VISITA JAKARTA",
        "uj": "2100000",
        "harga": "2950000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "B 9277 YU",
        "driver": "Gab.Rijal",
        "origin": "Manohara Surabaya",
        "destinasi": "IDM - DC TPIL JAKARTA",
        "uj": "1400000",
        "harga": "2950000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 8800 UN",
        "driver": "IWAN",
        "origin": "Rusa mas Surabaya",
        "destinasi": "Semarang",
        "uj": "1500009",
        "harga": "3575000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 8190 CAA",
        "driver": "Yuli",
        "origin": "Kantor Surabaya",
        "destinasi": "Gud SMG, Nipon,",
        "uj": "1200000",
        "harga": "2955000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "H 9247 OV",
        "driver": "Blangkon",
        "origin": "Gud Surabaya",
        "destinasi": "S3 2, Yogya 2, solo 2",
        "uj": "1600000",
        "harga": "3180000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "D 8509 DE",
        "driver": null,
        "origin": "Gud Surabaya",
        "destinasi": "SMG 2",
        "uj": "1700000",
        "harga": "2860000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "B 9099 CT",
        "driver": "Isnan",
        "origin": "Gud Surabaya",
        "destinasi": "Solo 3, S3 ,Klaten, yogya",
        "uj": "1525000",
        "harga": "2237000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 8345 CAA",
        "driver": "Imron",
        "origin": "Gud Surabaya",
        "destinasi": "Boyolali, Semarang",
        "uj": "1150000",
        "harga": "2697000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 9358 CR",
        "driver": "Saed",
        "origin": "Jnt Semarang",
        "destinasi": "Surabaya",
        "uj": "950000",
        "harga": "1800000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 9355 CR",
        "driver": "Wahyu M",
        "origin": "Jakarta Rusa mas",
        "destinasi": "Am tour yogya",
        "uj": "1400000",
        "harga": "3200000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 9359 CR",
        "driver": "Maryadi",
        "origin": "Surabaya",
        "destinasi": "Solo 2",
        "uj": "1050000",
        "harga": "2170000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 9357 CR",
        "driver": "Aziz",
        "origin": "Sidoarjo",
        "destinasi": "Solo",
        "uj": "1100000",
        "harga": "2000000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 8171 CAA",
        "driver": "Sahili",
        "origin": "Semarang",
        "destinasi": "Jombang",
        "uj": "800000",
        "harga": "1600000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 8369 CAA",
        "driver": "Hermansyah",
        "origin": "Manohara",
        "destinasi": "Daan mogot",
        "uj": "2100000",
        "harga": "3750000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 7963 NN",
        "driver": "Mbah joko",
        "origin": "Manohara+ kantor",
        "destinasi": "Kudus, Jepara , Semarang",
        "uj": "1300009",
        "harga": "3191000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 8370 CAA",
        "driver": "Andik",
        "origin": "Manohara+ kantor",
        "destinasi": "Jkt2 ,Tegal ,pkl",
        "uj": "2300000",
        "harga": "4050000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 7963 NN",
        "driver": "Mbak joko",
        "origin": "Salatiga Pak Untung",
        "destinasi": "Surabaya",
        "uj": "800000",
        "harga": "1565000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-17",
        "nopol": "L 8190 CAA",
        "driver": "Yuli",
        "origin": "Jnt Semarang",
        "destinasi": "Surabaya",
        "uj": "950000",
        "harga": "1800000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "L 8170 CAA",
        "driver": "Piyek",
        "origin": "Suparma Ambon krian",
        "destinasi": "Solo",
        "uj": "950000",
        "harga": "1500000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "B 9273 UW",
        "driver": "Asep/Hari",
        "origin": "Manohara",
        "destinasi": "Fb Mm Bandung",
        "uj": "2600000",
        "harga": "3400000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-18",
        "nopol": "B 9610 RX",
        "driver": "Narpiah/ Hari",
        "origin": "Manohara",
        "destinasi": "Fb Mm Kranggan",
        "uj": "3600000",
        "harga": "4350000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9358 CR",
        "driver": "Saed",
        "origin": "Tongya Ambon",
        "destinasi": "Blitar",
        "uj": "800000",
        "harga": "1300000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 8171 CAA",
        "driver": null,
        "origin": "Tongya Ambon",
        "destinasi": "Kediri",
        "uj": "600000",
        "harga": "1100000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 8170 CAA",
        "driver": "Piyek",
        "origin": "Solo Arie",
        "destinasi": "Ajinomoto Mjkt",
        "uj": "650000",
        "harga": "1300000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9359 CR",
        "driver": "Maryadi",
        "origin": "Semarang Miftah",
        "destinasi": "Surabaya Margomulyo",
        "uj": "850000",
        "harga": "1400000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9355 CR",
        "driver": "Wahyu M",
        "origin": "Solo Pandawa",
        "destinasi": "Malang",
        "uj": "950000",
        "harga": "1550000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 8370 CAA",
        "driver": "Andik / Suriyanto",
        "origin": "Victoria Juna",
        "destinasi": "Surabaya",
        "uj": "700000",
        "harga": "1500000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "B 9641 FXV",
        "driver": "Andi / Hari",
        "origin": "Manohara",
        "destinasi": "Mad Bandung",
        "uj": "2200000",
        "harga": "2850000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9305 CE",
        "driver": "Narko ( backup )",
        "origin": "Manohara",
        "destinasi": "Idm Bandung+ Idm Cirebon",
        "uj": "400000",
        "harga": "3300000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9305 CE",
        "driver": "Narko",
        "origin": "Kantor Wigas",
        "destinasi": "Yogya",
        "uj": "1425000",
        "harga": "2600000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "B 9021 URO",
        "driver": "Rusli / Hari",
        "origin": "Manohara",
        "destinasi": "Fb Mm + Indogrosir Sukabumi",
        "uj": "2300000",
        "harga": "3050000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "B 9177 CXR",
        "driver": "Wendy",
        "origin": "Kantor Surabaya",
        "destinasi": "Cirebon+ Kuningan",
        "uj": "800000",
        "harga": "1700000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 8800 UN",
        "driver": "Iwan",
        "origin": "Kantor Surabaya",
        "destinasi": "Rembang , Semarang, S3",
        "uj": "1350000",
        "harga": "2629000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 9356 CR",
        "driver": "Heri Sendek",
        "origin": "Manohara+ kantor",
        "destinasi": "Karanganyar,solo,Klaten,yogya2",
        "uj": "1400000",
        "harga": "4400000",
        "status": "confirmed"
    },
    {
        "tanggal": "2024-12-19",
        "nopol": "L 8190 CAA",
        "driver": "Yuli",
        "origin": "Jnt Semarang",
        "destinasi": "Surabaya",
        "uj": "950000",
        "harga": "1800000",
        "status": "confirmed"
    }
]';
        $data = json_decode($jsondata,true);
            foreach ($data as $entry) {
                DB::table('data')->insert($entry);
            }

        }


}
