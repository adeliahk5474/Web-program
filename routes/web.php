<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProgramController;

Route::get('/program', function () {
    return view('program.index');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/picture', function () {
    return view('picture.picture');
});

Route::get('/service', function () {
    return view('service.service');
});
