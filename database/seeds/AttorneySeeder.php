<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AttorneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attorneys')->insert([
            'nama' => 'Muhammad Syam Wijaya, S.H. CPL.',
            'jabatan' => 'Pengacara',
            'pengantar' => 'Beliau adalah pengacara berpengalaman yang bersertifikat PERADI dan IFPSM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
