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
                'translation_key' => 'dates',
            ],
            [
                'name' => __('categories.anime_manga'),
                'icon' => 'bi bi-emoji-kiss',
                'translation_key' => 'anime_manga',
            ],
            [
                'name' => __('categories.cosplay'),
                'icon' => 'bi bi-snapchat',
                'translation_key' => 'cosplay',
            ],
            [
                'name' => __('categories.otaku'),
                'icon' => 'bi bi-yin-yang',
                'translation_key' => 'otaku',
            ],
            [
                'name' => __('categories.videogames'),
                'icon' => 'bi bi-joystick',
                'translation_key' => 'videogames',
            ],
            [
                'name' => __('categories.comics'),
                'icon' => 'bi bi-book',
                'translation_key' => 'comics',
            ],
            [
                'name' => __('categories.tech'),
                'icon' => 'bi bi-robot',
                'translation_key' => 'tech',
            ],
            [
                'name' => __('categories.automobile'),
                'icon' => 'bi bi-car-front',
                'translation_key' => 'automobile',
            ],
            [
                'name' => __('categories.animal'),
                'icon' => 'bi bi-bug-fill',
                'translation_key' => 'animal',
            ],
            [
                'name' => __('categories.sports'),
                'icon' => 'bi bi-bicycle',
                'translation_key' => 'sports',
            ],
            [
                'name' => __('categories.math'),
                'icon' => 'bi bi-calculator',
                'translation_key' => 'math',
            ],
            [
                'name' => __('categories.history'),
                'icon' => 'bi bi-alipay',
                'translation_key' => 'history',
            ],
            [
                'name' => __('categories.cooking'),
                'icon' => 'bi bi-egg-fried',
                'translation_key' => 'cooking',
            ],
            [
                'name' => __('categories.fashion'),
                'icon' => 'bi bi-emoji-sunglasses',
                'translation_key' => 'fashion',
            ],
            [
                'name' => __('categories.music'),
                'icon' => 'bi bi-file-earmark-music',
                'translation_key' => 'music',
            ],
            [
                'name' => __('categories.literature'),
                'icon' => 'bi bi-book-half',
                'translation_key' => 'literature',
            ],
            [
                'name' => __('categories.travel'),
                'icon' => 'bi bi-airplane-engines',
                'translation_key' => 'travel',
            ],
            [
                'name' => __('categories.lgtb'),
                'icon' => 'bi bi-rainbow',
                'translation_key' => 'lgtb',
            ],
            [
                'name' => __('categories.adult'),
                'icon' => 'bi bi-incognito',
                'translation_key' => 'adult',
            ],
            [
                'name' => __('categories.adult_lgbt'),
                'icon' => 'bi bi-incognito',
                'translation_key' => 'adult_lgbt',
            ],
        ]);
    }
}
