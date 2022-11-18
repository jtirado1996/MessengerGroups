<?php

use App\Http\Controllers\GroupSlugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapXMLController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/sitemap.xml', [SitemapXMLController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('grupos',PostController::class);
Route::get('grupos/category/{category}/{slug}',[PostCategoryController::class,'postByCategory'])->name('posts.category');

Route::get('grupos/{post}/{slug}',[GroupSlugController::class, 'index'])->name('groups.show_slug');
Route::post('buscar-grupo',[SearchController::class, 'index'])->name('search_group');
