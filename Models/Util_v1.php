<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Util_v2 extends Model
{
    use HasFactory;

    function validacaoEsquema($finalXML){
        //A barra invertida resolveu o problema de indentificação da classe DOM. Agora é buscada/encontrada na doc padrão do PHP. Pois mesmo habilitado (phpinfo(), ele não era encontrado)
        $dom = new \DOMDocument;
        $pathXSD = 'C:\\xampp\\htdocs\\api-evt-remun-sgps\\evtRemun.xsd';

        $dom->loadXML($finalXML); // Carrega o XML que você deseja validar
    
        if ($dom->schemaValidate($pathXSD)) {
            echo "O XML é válido!";
        } else {
            echo "O XML não é válido!";
        }
    }
}

/* 

//o idEvento pode variar de evento para evento
            //então cada factory individualmente terá de construir o seu
    //public class DataClass{

    protected $sequencial = 1000;//null

    protected $indretif = 1;//required

    protected $nrrecibo = "string";//null 

    protected $indapuracao = 2;//required

    protected $perapur = "string";//required

    protected $indguia = 1;//null

    protected $cpftrab = "string";//required

    //Separar fora da classe - Feito 13/12/23, às 10:30h
    //protected $infomv = Infomv ;//null

    protected $infocomplem;

    protected $procjudtrab;

    protected $infointerm;

    //Demonstrativo de valores devidos ao trabalhador
    protected $dmdev = [
        idedmdev,//required
        codcateg,//required
        indrra,
        inforra,
        infoperapur,
        ideestablot,
        ideadc,
        infocomplcont
    ];
}

class Infomv
{
    protected $indmv = 1;
    protected $remunoutrempr = [
        tpinsc = 1,
        nrinsc = "string",
        codcateg = 101,
        vlrremunoe = 1
    ]
}
//Infomv - Json:
'infomv' = [
    'indmv' => 1,
    'remunoutrempr' = [
        'tpinsc' = 1,
        'nrinsc' = "string",
        'codcateg' = 101,
        'vlrremunoe' = 1
    ]
]
*/
