<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/ip-check', function (Request $request) {
    return [
        'request_ip'      => $request->ip(),
        'remote_addr'     => $request->server('REMOTE_ADDR'),
        'x_forwarded_for' => $request->header('X-Forwarded-For'),
        'cf_connecting_ip' => $request->header('CF-Connecting-IP'),
    ];
});
