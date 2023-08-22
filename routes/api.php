<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorreosController;

Route::apiResource('correos', CorreosController::class);