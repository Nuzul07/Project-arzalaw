<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'judul' => 'Penutupan Kartu Kredit & KTA',
                'isi' => 'Kami dapat membantu anda menutup Kartu Kredit & KTA dengan aman',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Penundaan Kewajiban Pembayaran Utang',
                'isi' => 'Membantu anda melakukan proses penundaan kewajiban pembayaran utang anda terhadap pihak kreditor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Sengketa Tanah',
                'isi' => 'Membantu penyelesaian masalah sengketa tanah anda secara proses hukum yang berlaku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Ahli Waris',
                'isi' => 'Membantu persoalan ahli waris anda secara proses hukum yang berlaku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Hak Asuh',
                'isi' => 'Membantu persoalan hak asuh anda secara proses hukum yang berlaku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Perceraian',
                'isi' => 'Membantu persoalan perceraian anda dengan pasangan anda secara proses hukum yang berlaku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'PKPP',
                'isi' => 'Membantu memberikan pengetahuan khusus tentang Pengadaan Barang dan Jasa Pemerintah maupun Swasta terutama di Bidang Hukum',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
