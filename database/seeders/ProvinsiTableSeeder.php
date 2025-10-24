<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->insert([
            ['id' => 1, 'nama_provinsi' => 'DI Yogyakarta'],
            ['id' => 2, 'nama_provinsi' => 'Jawa Tengah'],
            ['id' => 3, 'nama_provinsi' => 'Jawa Timur'],
            ['id' => 4, 'nama_provinsi' => 'Jawa Barat'],
            ['id' => 5, 'nama_provinsi' => 'DKI Jakarta'],
        ]);
    }
}
