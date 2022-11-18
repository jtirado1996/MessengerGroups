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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.anime_manga'),
                'icon' => 'bi bi-emoji-kiss',
                'translation_key' => 'anime_manga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.cosplay'),
                'icon' => 'bi bi-snapchat',
                'translation_key' => 'cosplay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.otaku'),
                'icon' => 'bi bi-yin-yang',
                'translation_key' => 'otaku',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.videogames'),
                'icon' => 'bi bi-joystick',
                'translation_key' => 'videogames',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.comics'),
                'icon' => 'bi bi-book',
                'translation_key' => 'comics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.tech'),
                'icon' => 'bi bi-robot',
                'translation_key' => 'tech',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.automobile'),
                'icon' => 'bi bi-car-front',
                'translation_key' => 'automobile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.animal'),
                'icon' => 'bi bi-bug-fill',
                'translation_key' => 'animal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.sports'),
                'icon' => 'bi bi-bicycle',
                'translation_key' => 'sports',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.math'),
                'icon' => 'bi bi-calculator',
                'translation_key' => 'math',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.history'),
                'icon' => 'bi bi-alipay',
                'translation_key' => 'history',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.cooking'),
                'icon' => 'bi bi-egg-fried',
                'translation_key' => 'cooking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.fashion'),
                'icon' => 'bi bi-emoji-sunglasses',
                'translation_key' => 'fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.music'),
                'icon' => 'bi bi-file-earmark-music',
                'translation_key' => 'music',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.literature'),
                'icon' => 'bi bi-book-half',
                'translation_key' => 'literature',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.travel'),
                'icon' => 'bi bi-airplane-engines',
                'translation_key' => 'travel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.lgtb'),
                'icon' => 'bi bi-rainbow',
                'translation_key' => 'lgtb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.adult'),
                'icon' => 'bi bi-incognito',
                'translation_key' => 'adult',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => __('categories.adult_lgbt'),
                'icon' => 'bi bi-incognito',
                'translation_key' => 'adult_lgbt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
