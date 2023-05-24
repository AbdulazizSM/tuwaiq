<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Rareforset;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
    
})->name('Home');

Route::get('/invoice', function () {
    return view('invoice');
    
})->name('invoice');

// Route::get('/Animals', function () {
//     return view('animals');
// })->name('animals');

// Route::get('/animals', function () {
//     return view('animals');
    
// })->name('animal');


//Route::get('/animals',[Rareforset::class,'AnimalType'])->name('animal');

// Route::get('/checkout/{id}',[Rareforset::class,'CheckOut'])->name('checkout');
//Route::get('/checkout',[Rareforset::class,'CheckOut']);
// Route::get('/AnimalType',[Rareforset::class,'AnimalType'])->name('animaltype');


//Route::get('/checkout/{id}', 'Rareforset@CheckOut')->name('checkout');

// Route::get('/checkout/{id}', [App\Http\Controllers\Rareforset::class, 'CheckOut']);
//Route::post('/invoice', [PhoneController::class, 'invoice'])->name('invoice');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/animals', [Rareforset::class, 'AnimalType'])->name('animal');
Route::get('/checkout/{id}', [Rareforset::class, 'CheckOut'])->name('checkout');
Route::post('/invoice', [Rareforset::class, 'invoice'])->name('invoice');
