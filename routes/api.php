<?php
use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\TimeApiController;
use App\Http\Controllers\TimeRpcController;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);


Route::prefix('rest')->group(function () {    
    Route::delete('/books/{id}', [BookRestController::class, 'destroy']);
    Route::patch('/books/{id}', [BookRestController::class, 'update']);
    Route::get('/books', [BookRestController::class, 'index']);
    Route::get('/books/create', [BookRestController::class, 'create']);
    Route::post('/books', [BookRestController::class, 'store']);
    Route::get('/books/{id}', [BookRestController::class, 'show']);
    Route::get('/books/{id}/edit', [BookRestController::class, 'edit']);

   //Route::resource('books', BookRestController::class);
});

Route::prefix('restapi')->group(function () {
    Route::delete('/books/{id}', [BookApiController::class, 'destroy']);
    Route::get('/books', [BookApiController::class, 'index']);
    Route::post('/books', [BookApiController::class, 'store']);
    Route::get('/books/{id}', [BookApiController::class, 'show']);
    Route::patch('/books/{id}', [BookApiController::class, 'update']);

    //Route::apiresource('books', BookApiController::class);
});

//cesty k time
Route::get('/time/json', [TimeApiController::class, 'getTime']);
Route::get('/time/rpc', [TimeRpcController::class, 'showTime']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
