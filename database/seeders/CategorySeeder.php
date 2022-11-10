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
            ['name' => __('categories.dates')],
            ['name' => __('categories.anime_manga')],
            ['name' => __('categories.cosplay')],
            ['name' => __('categories.otaku')],
            ['name' => __('categories.videogames')],
            ['name' => __('categories.comics')],
            ['name' => __('categories.tech')],
            ['name' => __('categories.automobile')],
            ['name' => __('categories.animal')],
            ['name' => __('categories.sports')],
            ['name' => __('categories.math')],
            ['name' => __('categories.history')],
            ['name' => __('categories.cooking')],
            ['name' => __('categories.fashion')],
            ['name' => __('categories.music')],
            ['name' => __('categories.literature')],
            ['name' => __('categories.travel')],
            ['name' => __('categories.lgtb')],
            ['name' => __('categories.adult')],
            ['name' => __('categories.adult_lgbt')],
        ]);
    }
}
