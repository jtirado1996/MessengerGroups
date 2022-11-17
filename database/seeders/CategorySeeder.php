<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => __('categories.dates'),
                'icon' => 'bi bi-person-hearts',
            ],
            [
                'name' => __('categories.anime_manga'),
                'icon' => 'bi bi-emoji-kiss',
            ],
            [
                'name' => __('categories.cosplay'),
                'icon' => 'bi bi-snapchat',
            ],
            [
                'name' => __('categories.otaku'),
                'icon' => 'bi bi-yin-yang',
            ],
            [
                'name' => __('categories.videogames'),
                'icon' => 'bi bi-joystick',
            ],
            [
                'name' => __('categories.comics'),
                'icon' => 'bi bi-book',
            ],
            [
                'name' => __('categories.tech'),
                'icon' => 'bi bi-robot',
            ],
            [
                'name' => __('categories.automobile'),
                'icon' => 'bi bi-car-front',
            ],
            [
                'name' => __('categories.animal'),
                'icon' => 'bi bi-bug-fill',
            ],
            [
                'name' => __('categories.sports'),
                'icon' => 'bi bi-bicycle',
            ],
            [
                'name' => __('categories.math'),
                'icon' => 'bi bi-calculator',
            ],
            [
                'name' => __('categories.history'),
                'icon' => 'bi bi-alipay',
            ],
            [
                'name' => __('categories.cooking'),
                'icon' => 'bi bi-egg-fried',
            ],
            [
                'name' => __('categories.fashion'),
                'icon' => 'bi bi-emoji-sunglasses',
            ],
            [
                'name' => __('categories.music'),
                'icon' => 'bi bi-file-earmark-music',
            ],
            [
                'name' => __('categories.literature'),
                'icon' => 'bi bi-book-half',
            ],
            [
                'name' => __('categories.travel'),
                'icon' => 'bi bi-airplane-engines',
            ],
            [
                'name' => __('categories.lgtb'),
                'icon' => 'bi bi-rainbow',
            ],
            [
                'name' => __('categories.adult'),
                'icon' => 'bi bi-incognito',
            ],
            [
                'name' => __('categories.adult_lgbt'),
                'icon' => 'bi bi-incognito',
            ],
        ]);
    }
}
