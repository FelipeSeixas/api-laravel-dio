<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello(){
        return 'Hello Controller';
    }

    public function helloV3($name){
        return 'Hello Controller com $name = ' . $name;
    }

    //Os colchetes determina se é ou não um Array.
    public function helloV4($name){
        return response()->json([
                                'início' => "Hello JSON {$name}",
                                'fim' => "Goodbye JSON {$name}"
                            ]);
    }

    //Chamada com vinculação à variável desejada, recebida pela chamada da API
    public function helloV5($name, Request $request){
        return response()->json([
                            'início' => "Oi, Hello JSON {$name}",
                            'fim' => $request->status
        ]);
    }

    //Retorna todo os dados enviados na chamada da API, a partir das variáveis
    public function helloV6(Request $request){
        return response()->json([
            'cliente' => "Ativo",
            'cadastro' => $request->all()
        ]);
    }
}