<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AttorneySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(DaftarKasusSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
