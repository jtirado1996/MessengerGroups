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
        MessengerBrand::insert([
            ['name' => 'WhatsApp', 'color' => '#00bb2d', 'icon' => 'bi bi-whatsapp'], 
            ['name' => 'Telegram', 'color' => '#229ED9', 'icon' => 'bi bi-telegram'], 
            ['name' => 'Signal', 'color' => '#005187', 'icon' => 'bi bi-signal']]);
    }
}
