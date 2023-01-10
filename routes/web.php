<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::name('web.')->group(function () {
    Route::get('/', [HomeController::class, 'show_index'])->name('home.show_index');
    Route::get('about-kus', [HomeController::class, 'show_about'])->name('home.show_about');
    Route::get('faq', [HomeController::class, 'show_faq'])->name('home.show_faq');
    Route::get('contact-us', [HomeController::class, 'show_contact'])->name('home.show_contact');
    Route::post('contact-us', [HomeController::class, 'do_contact'])->name('home.do_contact');
    Route::get('terms-of-use', [HomeController::class, 'show_tac'])->name('home.show_tac');
});