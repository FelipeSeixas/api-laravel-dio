<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use SimpleXMLElement;

use App\Models\Util_v2;

class EvtRemunDTOv5 extends Model{
    use HasFactory;

    public function EvtRemunTestModel(Request $request){
        
        try {
            $jsonPostman = json_decode($request->getContent(), true);
            
            if (json_last_error() != JSON_ERROR_NONE) {
                // Handle error - invalid JSON
            }
            
            //$jsonPostman = json_decode($request, true);
            //$xmlFromJson = new SimpleXMLElement('<root/>');
            $xmlFromJson = new SimpleXMLElement('<eSocial/>');
        
            return $this->arrayToXml($jsonPostman, $xmlFromJson);
        
        } catch (\JsonException $e) {
            echo $e->getMessage();
            echo "A decodificação do Json não foi possível. Favor analisar";
        }
    }
    
    //Função responsável pela conversão ao XML final que será enviado como teste. 
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
        
        try {
            //asXML é a principal função, pois cria a STRING QUE REPRESENTA O XML. Esse método também inclui o cabeçalho XML: (<?xml version="1.0" 
            
            $xmlString .= $xml->asXML();
            
            /*Caso deseje adicionar o cabeçalho mais completo, basta adicionar o código:
            $xmlString = str_replace('<?xml version="1.0"?>', '', $xmlString); e descomentar o código abaixo:*/
            /*$xmlString = '<?xml version="1.0" encoding="UTF-8"?>' . $xmlString;*/
    
            return $xmlString;

        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
            echo "O arquivo XML não foi gerado conforme o esperado. Favor verificar a passagem de objeto PHP para XML";
        }
    }
}
        
//$utilModel = new Util_v2();