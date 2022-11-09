<?php

namespace Database\Seeders;

use App\Models\MessengerBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessengerBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessengerBrand::insert([['name' => 'WhatsApp', 'color' => '#00bb2d'], ['name' => 'Telegram', 'color' => '#229ED9'], ['name' => 'Signal', 'color' => '#005187']]);
    }
}
