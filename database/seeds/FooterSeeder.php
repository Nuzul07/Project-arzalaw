<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'isi1' => 'Solusi yang tepat untuk anda yang sedang kesulitan dengan masalah tagihan Kartu Kredit/KTA dan berbagai masalah hukum lainnya.',
            'isi2' => 'Sen - Jum 9:00 - 17:00
                       Sabtu 8:00 - 14:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
