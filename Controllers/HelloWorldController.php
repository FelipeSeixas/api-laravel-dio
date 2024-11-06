<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello(){
        return  'Chamado pelo Controller' . 
                ' Função hello ' . 
                'API e-cidade: evento de Remuneração SGPS';
    }

    public function helloParam($param){
        return 'Chamado pelo Controller com parâmetros = ' . $param;
    }

    public function helloJson(){
        return response()->json(
            data:[
            'oi' => "Json do Hello",
            'blza' => "Ainda sou o novo Json"
            ]
        );
    }

    public function eCidadeParam($getAll){
        return $getAll;
    }
}
?>