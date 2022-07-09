<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kabupatens')->insert([
            'id' => '1103',
            'kabupaten' => 'Aceh Timur',
            'provinsi_id' => '11'
        ]);
    }
}
