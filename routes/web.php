<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paracontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/para/{id}", function( $id ){
 
echo "<h3>Az id:</h3>" . $id;
});
Route::get("/parameter/{id}", [Paracontroller::class, "index"]);
Route::get("/param/{id}/{name}", [Paracontroller::class, "dupla"]);
Route::get("/par/{id}/{name?}", [Paracontroller::class, "opcio"]);
Route::get("/pa{id}/{name}", [Paracontroller::class, "check"])->where (
["id" => "[0-9]+","name" => "[a-zA-Z]+"]
); 