<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class seederMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'Nama'=>"Syaugi Salim Amar",
            'Alamat'=>"Jember",
            'Usia'=>20,
            'Jenis-kelamin'=>1
        ]);
    }
}