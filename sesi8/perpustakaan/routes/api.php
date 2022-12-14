<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PustakawanController;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route untuk menampilkan data pustakawan
Route::get('/pustakawan', [PustakawanController::class, 'index']);

//add resource
Route::post('/pustakawan', [PustakawanController::class, 'store']);

//get detail resource
Route::get('/pustakawan/{id}', [PustakawanController::class, 'show']);


//Get all resources
Route::get('/books', [BooksController::class, 'index']);

//add resource
Route::post('/books', [BooksController::class, 'store']);

//get detail resource
Route::get('/books/{id}', [BooksController::class, 'show']);
