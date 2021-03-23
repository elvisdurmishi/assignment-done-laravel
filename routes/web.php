<?php

use Illuminate\Support\Facades\Route;

Route::get('/assignments', function () {
    return view('assignments.index');
});
