<?php
use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);

Route::get('/sac/books/{id}', BookSacController::class);


// DU prepisat do 6 riadkov nejako
Route::prefix('rest')->group(function () {
    Route::resource('books', BookRestController::class);
});


// DU 5 vlastnych
Route::prefix('restapi')->group(function () {
  Route::apiresource('books', BookApiController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
