<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Util_v2 extends Model
{
    use HasFactory;

    function validacaoEsquemaXSD($finalXML){
        //A barra invertida resolveu o problema de indentificação da classe DOM. Agora é buscada/encontrada na doc padrão do PHP. Pois mesmo habilitado (phpinfo(), ele não era encontrado)
        $dom = new \DOMDocument;
        $pathXSD = 'C:\\xampp\\htdocs\\api-evt-remun-sgps\\evtRemun.xsd';

        $dom->loadXML($finalXML); // Carrega o XML que você deseja validar
    
        if ($dom->schemaValidate($pathXSD)) {
            return "O XML é válido!";
        } else {
            return "O XML não é válido ou erro de path";
        }
    }
}