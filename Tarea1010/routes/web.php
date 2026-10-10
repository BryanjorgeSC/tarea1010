<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // aquí llamas a tu vista index.blade.php
});