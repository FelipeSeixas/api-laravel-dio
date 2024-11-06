<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvtRemunEcidade extends Model{
    use HasFactory;

    private $fullAPI;

    private $sequencial;
    private $indretif;
    private $nrrecibo;
    private $indapuracao;
    private $perapur;
    private $indguia;
    private $cpftrab; 
    private $infomv;
    private $infocomplem;
    private $procjudtrab;
    private $infointerm;
    private $dmdev;

    public function __construct(){
        
        $this->infomv = new Infomv();
        $this->infocomplem = new InfoComplem();
        $this->procjudtrab = new ProcJudTrab();
        $this->dmdev = new DmDev();
    }
}

class Infomv{
    private $indmv;
    private $remunoutrempr;

    public function __construct() {
        $this->remunoutrempr = new Remunoutrempr();
    }
}

class Remunoutrempr{
    private $tpinsc;
    private $nrinsc;
    private $codcateg;
    private $vlrremunoe;
}

class InfoComplem{
    private $nmtrab;
    private $dtnascto;
    private $sucessaovinc;

    public function __construct(){
        $this->sucessaovinc = new SucessaoVinc();
    }
}

class SucessaoVinc{
    public $tpinsc;
    public $nrinsc;
    public $matricant;
    public $dtadm;
    public $observacao;
}

class ProcJudTrab{
    public $tptrib;
    public $nrprocjud;
    public $codsusp;
}

class DmDev{
    public $idedmdev;
    public $codcateg;
    public $indrra;
    public $inforra;//obj
    public $infoperapur;//obj
    public $infoperant;//obj
    public $ideestablot;//obj
    public $ideadc;//obj
    public $infocomplcont;//obj

    public function __construct(){
        $this->inforra = new Inforra();
        $this->infoperapur = new InfoPerApur();
        $this->infoperant = new InfoPerAnt();
        $this->ideestablot = new Ideestablot();
        $this->ideadc = new Ideadc();
        $this->infocomplcont = new InfoComplemCont();
    }
}

class Inforra{
    public $tpprocrra;
    public $nrprocrra;
    public $descrra;
    public $qtdmesesrra;
    public $despprocjud;
    public $ideadv;
    public $infoperapur;
    public $infoperant;
           
    public function __construct()
    {
        $this->infoperapur = new InfoPerApur();
        $this->infoperant = new InfoPerAnt();

    }
}

class DespProcJud {
    public $vlrdespcustas;
    public $vlrdespadvogados;
}

class IdEadv{
    public $tpinsc;
    public $nrinsc;
    public $vlradv;
}

class InfoPerApur{
    public $ideestablot;

    public function __construct(){
        $this->ideestablot = new Ideac();   
    }
}

class Ideac{
    public $tpinsc;
    public $nrinsc;
    public $codlotacao;
    public $qtddiasav;    
    public $remunperapur;

    public function __construct(){
        $this->remunperapur = new RemunPerApur;
    }
}

class RemunPerApur{
    public $matricula;
    public $indsimples;
    public $itensremun;
    public $infoagnocivo;

    public $detoper;
    public $infotrabinterm;

    public function __construct(){
        $this->itensremun = new ItensRemun();
        $this->detoper = new DetOper();
    }
}

class ItensRemun{
    public $codrubr;
    public $idetabrubr;
    public $qtdrubr;
    public $fatorrbr;
    public $vrrubr;
    public $indapurir;
}

class InfoAgnocivo{
    public $grauexp;
}

class InfoPerAnt{
    public $ideadc;//obj
   
    public function __construct(){
        $this->ideadc = new Ideadc();
    }
}

class Ideadc{
    public $dtacconv;
    public $tpacconv;
    public $dsc;
    public $remunsuc;
    public $ideperiodo;//obj

    public $compacconv;
    public $dtefacconv;

    public function __construct(){
        $this->ideperiodo =new IdePeriodo();
    }
}

class IdePeriodo{
    public $perref;
    public $ideestablot;//obj

    public function __construct(){
        $this->ideestablot = new Ideestablot();
    }
}

class Ideestablot{
    public $tpinsc;
    public $nrinsc;
    public $codlotacao;
 //Adicional do OBJ filho do dmdev
    public $qtddiasav;
    public $remunperapur;
}

class DetOper {
    public $cnpjoper = "";
    public $regans = "";
    public $vrpgtit = 1;
    public $detplano;

    public function __construct() {
        $this->detplano = new DetPlano();
    }
}

class DetPlano {
    public $tpdep = "";
    public $cpfdep = "";
    public $nmdep = "";
    public $dtnascto = "";
    public $vlrpgdep = 1;
}

class InfoTrabInterm{
    public $codconv;
}

class InfoComplemCont{
    public $codcbo;
    public $natatividade;
    public $qtddiastrab; 
}