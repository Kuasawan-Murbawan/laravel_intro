<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DoublerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ApplicationController;

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
})->name('welcome');

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
//Route::get('/careers', [CareerController::class, 'basic']);

// Routing using controllers, need to pass a name in the url to go to the admin page
//Route::get('/careers/{adminName}', [CareerController::class, 'adminPage']);


// Doubler controller
Route::get('/doubler/{number}', [DoublerController::class, 'index']);


Route::get('/careers', [CareerController::class, 'positions'] )->name('careers');
    
Route::post('/careers', [PositionController::class, 'store']) -> name('job.create');

Route::get('/contact', [ApplicationController::class,'index']) -> name('applications-list');

Route::post('contact', [ApplicationController::class, 'store']) -> name('create.application');