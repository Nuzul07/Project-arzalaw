<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'alamat' => 'Cervino Village Lantai 3 No.3P,
            Jl. KH. Abdullah Syafei No.27
            Tebet Barat Tebet Jakarta Selatan 12810',
            'notlp' => '(021) 2283 5852',
            'email' => 'arzalawoffice@gmail.com',
            'whatsapp' => '0813 1600 1246 (Whatsapp)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
