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
            ['name' => 'WhatsApp'],
            ['name' => 'Telegram'],
            ['name' => 'Signal'],
        ]);
    }
}
