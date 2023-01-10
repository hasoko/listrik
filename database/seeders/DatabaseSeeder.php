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
            [

                'id_pelanggan' => 750004,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Sumatera Selatan',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750005,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Riau',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750006,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Jambi',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750007,
                'faktor_meter' => 10,
                'nama' => 'Anjungan DKI Jakarta',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750008,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Jawa Barat',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750009,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Jawa Tengah',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750010,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Jawa Timur',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750011,
                'faktor_meter' => 10,
                'nama' => 'Anjungan DI Yogyakarta',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750012,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Kalimantan Barat',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750013,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Kalimantan Tengah',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750014,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Kalimantan Timur',
                'npwp' => null,
                'telepon' => null,
                'id_unit' => 1,
            ],
            [

                'id_pelanggan' => 750015,
                'faktor_meter' => 10,
                'nama' => 'Anjungan Sulawesi Utara',
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
            [
                'id_user' => 7,
                'username' => '750004',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750004,

            ],
            [
                'id_user' => 8,
                'username' => '750005',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750005,

            ],
            [
                'id_user' => 9,
                'username' => '750006',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750006,

            ],
            [
                'id_user' => 10,
                'username' => '750007',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750007,

            ],
            [
                'id_user' => 11,
                'username' => '750008',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750008,

            ],
            [
                'id_user' => 12,
                'username' => '75009',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750009,

            ],
            [
                'id_user' => 13,
                'username' => '750010',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750010,

            ],
            [
                'id_user' => 14,
                'username' => '750011',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750011,

            ],
            [
                'id_user' => 15,
                'username' => '750012',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750012,

            ],
            [
                'id_user' => 16,
                'username' => '750013',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750013,

            ],
            [
                'id_user' => 17,
                'username' => '750014',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750014,

            ],
            [
                'id_user' => 18,
                'username' => '750015',
                'password' => bcrypt('123456'),
                'level' => 'Pelanggan',
                'id_pelanggan' => 750015,

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

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750002,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750003,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750004,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750005,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750006,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750007,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750008,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750009,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750010,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750011,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750012,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750013,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750014,

            ],
            [

                'bln_kwhmeter' => '10',
                'thn_kwhmeter' => '2022',
                'meter_awal' => 0,
                'meter_akhir' => 0,
                'tgl_catat' => null,
                'id_pelanggan' => 750015,

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
                'judul' => 'Pemberitahuan Maintenance Listrik',
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
