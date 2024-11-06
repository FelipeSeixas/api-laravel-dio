<?php

use App\Http\Controllers\EvtRemunControllerV5;
use Illuminate\Support\Facades\Route;

//Arquitetura modificada para o corpo dos métodos no Model
Route::post(
    'evt-remun-param-v6',[
    EvtRemunControllerV5::class,
    'EvtTestModel'
    ]
);