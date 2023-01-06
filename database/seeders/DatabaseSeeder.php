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
                'level' => 'Admin',

            ],
            [
                'id_user' => 2,
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'level' => 'Kasir',

            ],
            [
                'id_user' => 3,
                'username' => 'petugas',
                'password' => bcrypt('123456'),
                'level' => 'Petugas',

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
        $user2 = [
            [
                'id_user' => 4,
                'username' => '750001',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750001,

            ],
            [
                'id_user' => 5,
                'username' => '750002',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750002,

            ],
            [
                'id_user' => 6,
                'username' => '750003',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750003,

            ],

        ];

        $kwhmeter = [
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750001,

            ],
            [

                'bln_kwhmeter' => '12',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750002,

            ],
            [

                'bln_kwhmeter' => '11',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750003,

            ],
            [

                'bln_kwhmeter' => '12',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 50,
                'tgl_catat' => '2022-12-16',
                'id_pelanggan' => 750002,

            ],
            [

                'bln_kwhmeter' => '11',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 100,
                'tgl_catat' => '2022-11-16',
                'id_pelanggan' => 750001,

            ],


        ];


        $tarif = [
            [

                'id_tarif' => '1',
                'tarif_lwbp' => '1005',
                'tarif_wbp' => '1504',
            ],


        ];
        $informasi = [
            [

                'id_informasi' => 1,
                'judul' => 'Pemberitahuan Maintinance Listrik',
                'isi' => 'Yang terhormat Bapak/Ibu Pelanggan, akan ada pemadaman listrik pada tanggal 1 Januari 2022 Pukul 22.00 Wib sd Selesai.',
                'tgl_informasi' => '2022-12-12',
                'id_user' => 1,

            ],

        ];

        DB::table('user')->insert($user);
        DB::table('unit')->insert($unit);
        DB::table('pelanggan')->insert($pelanggan);
        DB::table('user')->insert($user2);
        DB::table('kwhmeter')->insert($kwhmeter);
        DB::table('tarif')->insert($tarif);
        DB::table('informasi')->insert($informasi);
    }
}
