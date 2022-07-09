<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert([
            ['id' => '110301', 'kabupaten_id' => '1103', 'kecamatan' => 'Darul Aman'],
            ['id' => '110302', 'kabupaten_id' => '1103', 'kecamatan' => 'Julok'],
            ['id' => '110303', 'kabupaten_id' => '1103', 'kecamatan' => 'Idi Rayeuk'],
            ['id' => '110304', 'kabupaten_id' => '1103', 'kecamatan' => 'Birem Bayeun'],
            ['id' => '110305', 'kabupaten_id' => '1103', 'kecamatan' => 'Serbajadi'],
            ['id' => '110306', 'kabupaten_id' => '1103', 'kecamatan' => 'Nurussalam'],
            ['id' => '110307', 'kabupaten_id' => '1103', 'kecamatan' => 'Peureulak'],
            ['id' => '110308', 'kabupaten_id' => '1103', 'kecamatan' => 'Rantau Selamat'],
            ['id' => '110309', 'kabupaten_id' => '1103', 'kecamatan' => 'Simpang Ulim'],
            ['id' => '110310', 'kabupaten_id' => '1103', 'kecamatan' => 'Rantau Peureulak'],
            ['id' => '110311', 'kabupaten_id' => '1103', 'kecamatan' => 'Pante Bidari'],
            ['id' => '110312', 'kabupaten_id' => '1103', 'kecamatan' => 'Madat'],
            ['id' => '110313', 'kabupaten_id' => '1103', 'kecamatan' => 'Indra Makmu'],
            ['id' => '110314', 'kabupaten_id' => '1103', 'kecamatan' => 'Idi Tunong'],
            ['id' => '110315', 'kabupaten_id' => '1103', 'kecamatan' => 'Banda Alam'],
            ['id' => '110316', 'kabupaten_id' => '1103', 'kecamatan' => 'Peudawa'],
            ['id' => '110317', 'kabupaten_id' => '1103', 'kecamatan' => 'Peureulak Timur'],
            ['id' => '110318', 'kabupaten_id' => '1103', 'kecamatan' => 'Peureulak Barat'],
            ['id' => '110319', 'kabupaten_id' => '1103', 'kecamatan' => 'Sungai Raya'],
            ['id' => '110320', 'kabupaten_id' => '1103', 'kecamatan' => 'Simpang Jernih'],
            ['id' => '110321', 'kabupaten_id' => '1103', 'kecamatan' => 'Darul Ihsan'],
            ['id' => '110322', 'kabupaten_id' => '1103', 'kecamatan' => 'Darul Falah'],
            ['id' => '110323', 'kabupaten_id' => '1103', 'kecamatan' => 'Idi Timur'],
            ['id' => '110324', 'kabupaten_id' => '1103', 'kecamatan' => 'Peunaron']
        ]);
    }
}
