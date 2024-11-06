<?php

use App\Http\Controllers\EvtRemunJsonResultController;
use App\Http\Controllers\EvtRemunControllerV4;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\EvtRemunControllerV5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Arquitetura modificada para o corpo dos métodos no Model
Route::post(
    'evt-remun-param-v6',[
    EvtRemunControllerV5::class,
    'EvtTestModel'
    ]
);

Route::post(
    'evt-remun-param-v5',[
    EvtRemunControllerV5::class,
    'EvtRemunParamV5JsonXml'
    ]
);






/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post(
    'evt-remun-param-v5',[
    EvtRemunControllerV4::class,
    'EvtRemunParamV5JsonXml'
    ]
);

Route::post(
    'evt-remun-param-v4',
    [
        EvtRemunControllerV4::class,
        'EvtRemunParamV4'
    ]
);



//OK - Adicionando Json - EvtRemun. Formatação --> (path, [classe::, função]);
Route::post(
    'evt-remun-post-controller', 
    [
        EvtRemunJsonResultController::class, 
        'EvtRemunRGPS'
    ]
);

/*
Route::post(
    'evt-remun-param-v4',
    [
        EvtRemunControllerV4::class,
        'EvtRemunParamV4'
    ]
);
*/

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

//Métodos para pegar todo o json enviado à API
//https://www.treinaweb.com.br/blog/principais-metodos-para-obtencao-de-parametros-da-request-no-laravel


/*
//"Básica" - Postman
Route::post('hello-post', function(){
    return 'Atualizado em 19/12 - API e-cidade: evento de Remuneração SGPS';
});

//Teste Guilherme
Route::post('laravel_v1', function(){
    return 'Primeiro Laravel rout!!';
});

Route::post('post-parametros/{name}', function($name){
    return 'A API chama-se: ' . $name;
});

//A partir daqui, migrado para uso de Controllers:
//Route::post('hello-post-controller', 'HelloWorldController@hello');
//Route::post('post-parametros-controller/{name}', 'HelloWorldController@helloParam');

//A partir do Laravel 8.x, a sintaxe para definir rotas que apontam para controladores 
//mudou para usar a classe do controlador, em vez de uma string.

Route::post('hello-post-controller', [HelloWorldController::class, 'hello']);
Route::post('post-parametros-controller/{name}', [HelloWorldController::class, 'helloParam']);

//OK - Adicionando Json
Route::post('hello-post-controller-json', [HelloWorldController::class, 'helloJson']);



//OK - Adicionando Json - EvtRemun. Formatação --> (path, [classe::, função]);
Route::post('evt-remun-post-controller-json', [EvtRemunJsonResultController::class, 'EvtRemunRGPSJson']);
*/


