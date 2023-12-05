<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/about/{username}/{age}', function($username,$age){
    return view('about', ['username' => $username], ['age' => $age]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::fallback(function(){
    return view('error');
});


// Using controllers
Route::get('/careers', [CareerController::class, 'basic']);

Route::get('/careers/{adminName}', [CareerController::class, 'adminPage']);