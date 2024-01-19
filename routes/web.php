<?php

use App\Models\Monitor;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $monitors = Monitor::paginate();
    return Inertia::render('Home',['monitors' => $monitors]);
    // return Inertia::render('Home',['monitors' => $monitors])
    // ->withViewData(['title' => 'Home page']);
    // return view('welcome');
});
Route::get('/test', function () {
    return Inertia::render('Test');
});
Route::get('/about', function () {
    return Inertia::render('About');
});
Route::get('/login', function () {
    return Inertia::render('Login');
});
Route::get('/site/create', function () {
    return Inertia::render('Site/Create');
})->name('site.create');

Route::get('/laravel', function () {
    // return Inertia::render('LaravelPage');
    return view('pages.laravel');
});
