<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocuRequestController;
use App\Models\Announcement;
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
    if (Auth::check()) {
        return redirect()->route('welcome');
    } else {
        $announcement = announcement::all();
        return view('home', compact('announcement'));
    }
})->name('home');

// Route::get('home', function () {
//     if (Auth::check()) {
//         return redirect()->route('welcome');
//     } else {
//         return view('home');
//     }
// })->name('home');

// Route::get('/home', function () {
//     $announcement = announcement::all();
//     return view('home', compact('announcement'));
// })->name('home');
  

Route::middleware(['auth'])->group(function () {
    // protected routes here
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/request', function () {
        return view('request');
    })->name('request');

    Route::get('/bc', function () {
        return view('bc');
    })->name('bc');

    Route::get('/bca', function () {
        return view('bca');
    })->name('bca');

    Route::get('/bcaf', function () {
        return view('bcaf');
    })->name('bcaf');

    Route::get('/bcr', function () {
        return view('bcr');
    })->name('bcr');

    Route::get('/bcf', function () {
        return view('bcf');
    })->name('bcf');

    Route::get('/compform', function () {
        return view('compform');
    })->name('compform');

    Route::get('/idform', function () {
        return view('idform');
    })->name('idform');


    // Route::get('/certificate/bc', function () {
    //     return view('certificate.bc');
    // })->name('certificate.bc');

    // Route::get('/certificate/bca', function () {
    //     return view('certificate.bca');
    // })->name('certificate.bca');

    // Route::get('/certificate/bcaf', function () {
    //     return view('certificate.bcaf');
    // })->name('certificate.bcaf');

    // Route::get('/certificate/bcr', function () {
    //     return view('certificate.bcr');
    // })->name('certificate.bcr');
});



//Signin Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
//Signup Route
Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
Route::post('/signup', [LoginController::class, 'signupPost'])->name('signup.post');
//Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//Document Request Route
Route::post('/docuRequest', [DocuRequestController::class, 'docuRequest'])->name('docuRequest');
