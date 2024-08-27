<?php



use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Auth\Register;
use App\Livewire\Files\ShowFile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/login",Login::class)->name('login');
Route::get("/register",Register::class)->name('register');


Route::get('/google', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');


Route::middleware('auth')->group(function () {

    Route::get("/dashboard", Dashboard::class)->name('dashboard');
    Route::get("/logout", Logout::class)->name('logout');
    Route::get("/show-file/{id}", ShowFile::class)->name('show.file')->lazy();
    
});

  
