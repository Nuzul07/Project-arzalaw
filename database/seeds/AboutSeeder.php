<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama' => 'ARZA LAW OFFICE',
            'isi1' => 'ARZA LAW OFFICE merupakan Advokat berpengalaman, dan profesional dengan izin. Kami berkantor di Cervino Village Lantai 3 No.3P, Jl. KH. Abdullah Syafei No.27, Tebet Barat Tebet Jakarta Selatan 1281. Kami siap membantu anda dalam permasalahan hukum pidana dan perdata, terutama perihal penutupan Kartu Kredit atau KTA secara legal hingga clear BI checking, sesuai dengan peraturan BI No. 7/34/DPNP, tertanggal 18 Juli 2005 dan berbagai permasalahan hukum lainnya. ',
            'isi2' => 'Kami hadir untuk segala permasalahan hukum anda, agar dapat menyelesaikannya dengan tuntas. Bersama kami Kantor ARZA LAW, anda akan menjadi lebih merasa  tenang, aman serta percaya diri dalam menghadapi segala permasalahan hukum yang berat dan rumit. Kantor Adhiakta memberikan Jasa pengacara profesional serta advokat terpercaya dan sangat berpengalaman dalam berbagai kasus yang membelit anda, dan terbukti kami banyak menyelesaikan banyak kasus yang rumit dengan hasil yang memuaskan klien kami.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
