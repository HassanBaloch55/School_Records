<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildController;

Route::resource('children', ChildController::class);
