<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
            'title' => 'Cappuccino',
            'description' => 'Tekstur yang dimiliki cappucino ini juga halus dan memiliki rasa sedikit manis.',      
            'image' => '/template/img/cappuccino.jpg',
            'harga' => 12],
            [
            'title' => 'Espresso',
            'description' => 'Kopi ini disajikan dengan seduhan kopi murni tanpa ada tambahan susu, pemanis ataupun krimer.',      
            'image' => '/template/img/espresso.jpg',
            'harga' => 13],
            [
            'title' => 'Red Eye',
            'description' => 'Rasanya yang sangat pahit ini membuat yang minum jadi lebih melek dan segar.', 
            'image' => '/template/img/red eye.jpg',     
            'harga' => 14],
            [
            'title' => 'Kopi Kothok',
            'description' => 'Kopi kothok merupakan tumbukan biji kopi yang diseduh bersama gula dan air di dalam teko',      
            'image' => '/template/img/kothok.jpeg',
            'harga' => 11],
            [
            'title' => 'Kopi Toraja',
            'description' => 'Jenis kopi ini memiliki rasa yang khas karena memiliki sentuhan kayu manis dan kapulaga.',      
            'image' => '/template/img/toraja.jpeg',
            'harga' => 10]
            ]);
           
    }
}
