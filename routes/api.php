<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test/response', function () {
    return response()->json([
        [ 'name' => 'Finish project', 'complete' => false, 'id' => 1, 'tag' => "math" ],
        [ 'name' => 'Read Chapter 4', 'complete' => false, 'id' => 2, 'tag' => "science" ],
        [ 'name' => 'Turn in Homework', 'complete' => false, 'id' => 3, 'tag' => "math" ],
        [ 'name' => 'Finish Laracasts video', 'complete' => true, 'id' => 4, 'tag' => "programing"],

    ]);
});
