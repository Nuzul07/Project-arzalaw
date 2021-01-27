<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DaftarKasusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_kasuses')->insert([
            'judul' => 'example',
            'nama' => 'example',
            'tgl' => Carbon::create('2000', '01', '01'),
            'hasil' => 'example',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
