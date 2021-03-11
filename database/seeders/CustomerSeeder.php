<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
            'image' => '/template/img/cappuccino.jpg',
            'nama' => 'Risky Dwi Ramadhan',
            'tanggal' => '2021/03/11'],
            [
            'image' => '/template/img/espresso.jpg',
            'nama' => 'Dimas',
            'tanggal' => now()]

        ]);
    }
}
