<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Session;

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

//dd(\Illuminate\Support\Facades\App::getLocale());

// роут редирект на домашнюю страницу с префиксом языка
Route::get('/', function () {
    return view('home');
})->withoutMiddleware([\App\Http\Middleware\Locale::class])->name('default');

// роуты локализации
Route::get('setlocale/{locale}', [LanguageController::class, 'index'])->name('locale');
Route::get('/lang-{lang}', [LanguageController::class, 'show']);

Route::group(['prefix' => App\Http\Middleware\Locale::getLocale()], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});



//Route::get('/responsive', function () {
//    return view('responsive');
//})->name('responsive');
//
//Route::get('/disabled', function () {
//    return view('disabled');
//})->name('disabled');
//
//Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::post('/contacts', [ContactsController::class, 'contactForm']);

// Errors
Route::get('/404', function(){
    return response()->view('errors.404', [])->setStatusCode(404);
})->name('errors.404');
