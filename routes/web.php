<?php

use DevPac\Calculation1\App\Http\Controllers\CalculationController;

Route::get('/welcome', function(){
    echo " Welcome";
});

Route::get('/add/{a}/{b}',[CalculationController::class,'add']);