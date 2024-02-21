<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//Postman - Hello copy 6 - Retorna um Array JSON com dados vinculados à variável sinalizada na chamada da API
Route::get(
    'hello-post-controller-v6/{name}',
    [HelloWorldController::class, 'helloV6']
);

//Postman - Hello copy 5 - Retorna um Array JSON com dados vinculados à variável sinalizada na chamada da API
Route::post(
    'hello-post-controller-v5/{name}',
    [HelloWorldController::class, 'helloV5']
);

//Postman - Hello copy 4 - Retorna um JSON:
Route::post(
    'hello-post-controller-v4/{name}',
    [HelloWorldController::class, 'helloV4']
);

//Postman - Hello copy 3:
Route::post(
    'hello-post-controller/{name}', 
    [HelloWorldController::class, 'helloV3']
);

//Postman - Hello copy 2:
Route::post(
    'hello-post-controller', 
    [HelloWorldController::class, 'hello']
);

//Postman - Hello:
Route::get(
    'hello/{name}', 
    function($name)
    {
        return 'Hello World ' . $name ;
    }
);

//Postman - Hello copy 1:
Route::post('hello-post', function(){
    return 'Sou o Hello post simples';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
