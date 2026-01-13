<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canRegister' => Features::enabled(Features::registration()),
//    ]);
//})->name('home');


Route::get('/', [MyPlaceController::class, 'index'])->name('home');


Route::get('/my_page', function (){
    return 'This is my page';
})->name('my_page');



Route::get('/about_us', function (){
    return 'This is about_us page';
})->name('about_us');

Route::get('/nomenclature', function (){
    return 'This is nomenclature page';
})->name('nomenclature');

Route::get('/specification', function (){
    return 'This is specification page';
})->name('specification');



Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
