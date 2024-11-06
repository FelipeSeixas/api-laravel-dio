<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;

class EvtRemunControllerV4 extends Controller
{
    //Recebeu todas as informações enviadas via Postman
    public function EvtRemunParamV4(Request $request){
        
        //echo $request
        //var_dump($request);
        //dd($request->all());
        return $request->all();
    }

//Recebeu Json para converter em XML
    public function EvtRemunParamV5JsonXml(Request $request){
    
    $jsonPostman = json_decode($request->getContent(), true);

    if (json_last_error() != JSON_ERROR_NONE) {
        // Handle error - invalid JSON
    }
    
    //$jsonPostman = json_decode($request, true);
    $xmlFromJson = new SimpleXMLElement('<root/>');

    return $this->arrayToXml($jsonPostman, $xmlFromJson);
}

//Função responsável pela conversão ao XML final que será enviado como teste. 
//Em seguida, será preciso padronizar conforme o manual (XSD dos eventos)
    public function arrayToXml($array, $xml){
        $xmlString = '';
        foreach ($array as $key => $value) {
            if(is_int($key)){
                $key = "e";
            }
            if(is_array($value)){
                $label = $xml->addChild($key);
                $this->arrayToXml($value, $label);
            }
            else {
                $xml->addChild($key, $value);
            }
        }
        $xmlString .= $xml->asXML();//Principal função que realmente cria a STRING QUE REPRESENTA O XML.
        $xmlString = '<?xml version="1.0" encoding="UTF-8"?>' . $xmlString;
        return $xmlString;
    }
}