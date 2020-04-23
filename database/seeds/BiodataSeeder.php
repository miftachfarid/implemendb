<?php

use Illuminate\Database\Seeder;
use App\BiodataMahasiswa;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++) {
            BiodataMahasiswa::create([
                "name" => "Mahasiswa ".$i,
                "nim" => time() . $i,
                "address" => "Kota Malang"
            ]);
        }
    }
}
