<?php

use Inertia\Inertia;

use App\Models\Monitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/test', function () {
    return Inertia::render('Test');
});
Route::get('/about', function () {
    return Inertia::render('About');
});
Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');
Route::post('/login/submit', function (Request $request) {

    $request->validate([
        'email' => ['required', "max:100"],
        'password' => ['required', "min:6"],
    ]);
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return to_route('home');
    }else{
        return redirect()->back()->withErrors([
            'error_message' => 'The provided credentials do not match our records.',
        ]);
    }

    // return Inertia::location('/');
//    dd($request->all());
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return to_route('login');

})->name('logout');
Route::get('/site/create', function () {
    return Inertia::render('Site/Create');
})->name('site.create');

Route::get('/laravel', function () {
    // return Inertia::render('LaravelPage');
    return view('pages.laravel');
});
