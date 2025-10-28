<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('penerbit')->insert([
            [
                'penerbit' => 'Graha Ilmu',
                'alamat' => 'Ruko Jambusari No. 7A, Wedomartani',
                'telepon' => '(0274) 882262',
                'e_mail' => 'pesanan@grahailmu.co.id',
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'penerbit' => 'Jaya Press',
                'alamat' => 'Jl. Wonosari',
                'telepon' => '2113',
                'e_mail' => 'wijaya@gmail.comm',
                'created_at' => now(), 
                'updated_at' => now(),
            ],
            [
                'penerbit' => 'MediaKom',
                'alamat' => 'Deresan CT X, Yogyakarta',
                'telepon' => '21212',
                'e_mail' => 'penerbitmediakom@gamail',
                'created_at' => now(), 
                'updated_at' => now(),
            ],
        ]);
    }
}