<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\PostLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    if (auth()->check()) {
        return redirect()->route('post-login');
    }

    return view('auth.login');
})->name('login');

Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');


Route::middleware('auth')->group(function () {
    Route::get('/redirect-after-login', PostLoginController::class)->name('post-login');
    Route::post('/logout', [GoogleController::class, 'logout'])->name('logout');

    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::patch('/users/{user}/role', [AdminController::class, 'updateRole'])->name('admin.users.update-role');
    });

    Route::prefix('agent')->middleware('role:agent')->group(function () {
    Route::get('/', [AgentController::class, 'index'])->name('agent.dashboard');
    });
    Route::middleware('role:customer')->group(function () {
    Route::view('/dashboard', 'pages.dashboard')->name('dashboard');

    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
    });


});
