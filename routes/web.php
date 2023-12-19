<?php

//                        roept controller aan

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;

Route::get('/', [APIController::class, 'index']);
