<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Models\EvtRemunDTOv5;
use App\Models\Util_v2;

class EvtRemunControllerV5 extends Controller{
    
    //Classe teste para chamar no Model
        // Este método chama a função EvtRemunTestModel do Model EvtRemunDTOv5
        // Ele recebe um objeto Request como argumento e retorna a resposta da função do Model
    public function EvtTestModel(Request $requestTestMOdel){
        
        $evtRemuTestDTO = new EvtRemunDTOv5();
        //Chama a função EvtRemunTestModel do Model e 
        //retorna sua resposta com o XML para ser enviado ao E-Social
        
        $finalXml = $evtRemuTestDTO->EvtRemunTestModel($requestTestMOdel);

        //$evtRemuTestDTO->EvtRemunTestModel() validacaoEsquema($finalXml);
        
        //$utilModel = new Util_v2();
        //$validadeXSD = $utilModel->validacaoEsquemaXSD($finalXml);
        //return $validadeXSD;

        return $finalXml;//Possibilita analisar o XML retornado pela API, via Postan
    }
    
/*Movido para o MODEL (CLASSE EvtRemunDTOv5) desde a VERSÃO 5.
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
*/
}