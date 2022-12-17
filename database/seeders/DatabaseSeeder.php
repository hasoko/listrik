<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id_user' => 1,
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'status' => 'Admin',

            ],
            [
                'id_user' => 2,
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'status' => 'Kasir',

            ],
            [
                'id_user' => 3,
                'username' => 'petugas',
                'password' => bcrypt('123456'),
                'status' => 'Petugas',

            ],

        ];

        $unit = [
            [

                'nama_unit' => 'Anjungan',
                'prefix' => '75',
            ],
            [

                'nama_unit' => 'Gedung',
                'prefix' => '76',
            ],

        ];
        $pelanggan = [
            [

                'id_pelanggan' => 750001,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Aceh',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750002,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Sumatera Utara',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750003,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Sumatera Barat',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],


        ];

        $kwhmeter = [
            [

                'bulan' => '10',
                'tahun' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tanggal_catat' => null,
                'id_pelanggan' => 750001,

            ],
            [

                'bulan' => '12',
                'tahun' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tanggal_catat' => null,
                'id_pelanggan' => 750002,

            ],
            [

                'bulan' => '11',
                'tahun' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tanggal_catat' => null,
                'id_pelanggan' => 750003,

            ],
            [

                'bulan' => '12',
                'tahun' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 50,
                'tanggal_catat' => '2020-12-16',
                'id_pelanggan' => 750002,

            ],
            [

                'bulan' => '11',
                'tahun' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 100,
                'tanggal_catat' => '2020-11-16',
                'id_pelanggan' => 750001,

            ],
            

        ];


        $tarif = [
            [

                'id_tarif' => 'lwbp',
                'tarifperkwh' => '1000',
            ],
            [

                'id_tarif' => 'wbp',
                'tarifperkwh' => '1100',
            ],

        ];

        DB::table('user')->insert($user);
        DB::table('unit')->insert($unit);
        DB::table('pelanggan')->insert($pelanggan);
        DB::table('kwhmeter')->insert($kwhmeter);
        DB::table('tarif')->insert($tarif);
    }
}
