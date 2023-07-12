<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/blogpost',[PostController::class,'blogpost']);
