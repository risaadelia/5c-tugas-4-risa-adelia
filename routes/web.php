<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

Route::get('/', [MatakuliahController::class,'index']);
