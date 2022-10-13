<?php
use LP\calculator\CalculatorController;
use Illuminate\Support\Facades\Route;


// Route::get('calculator',function(){
//     echo "Hello ";
// });

Route::get('add/{a}/{b}',[CalculatorController::class,'add']);
Route::get('substarct/{a}/{b}',[CalculatorController::class,'substarct']);