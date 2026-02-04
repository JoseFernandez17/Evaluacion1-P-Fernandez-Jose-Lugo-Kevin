<?php

use App\Http\Controllers\PropiedadController;
use App\Models\Propiedad;
use Illuminate\Support\Facades\Route;

Route::resource('propiedades',PropiedadController::class);
