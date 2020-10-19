<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    DB::table('pageviews')->insert(
        [
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'url' => $_SERVER['REQUEST_URI'] ?? ''
        ]
    );

    return view('welcome');
});
