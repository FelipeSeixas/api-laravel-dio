<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvtRemunJsonResultController extends Controller{
    public function EvtRemunRGPS(){
        return 'API EvtRemunSGPS (Evento remuneração) - Post retornando';
    }

    public function EvtRemunRGPSJson(){
        return response()->json(
            data:[
                'sequencial' => 1000,
                'indretif' => 1,
                'nrrecibo' => "",
                'indapuracao' => 2,
                'perapur' => "",
                'indguia' => 1,
                'cpftrab' => "",
                //'infomv' => Infomv //O tipo será um objeto Infomv
                'infomv' => [
                    [
                        'indmv' => 1,
                        'remunoutrempr' => [
                            'tpinsc' => 1,
                            'nrinsc' => "",
                            'codcateg' => 101,
                            'vlrremunoe' => 1
                        ]
                    ]
                ],
                'infocomplem' => [[
                    'nmtrab' => "",
                    'dtnascto' => "",
                    'sucessaovinc' => [
                        'tpinsc' => 1,
                        'nrinsc' => "",
                        'matricant' => "",
                        'dtadm' => "",
                        'observacao' => ""
                    ] 
                ]],
                'procjudtrab' => [
                    'tptrib'=> 1,
                    'nrprocjud'=> "",
                    'codsusp' => ""
                ],
                'infointerm' => [
                    "dia" => 1
                ],
                'dmdev' => [
                    'idedmdev' => "",
                    'codcateg' => 101,
                    'indrra' => "",
                    'inforra' => [
                        'tpprocrra' => 1,
                        'nrprocrra' => "",
                        'descrra' => "",
                        'qtdmesesrra' => 1,
                        'despprocjud' => [
                            'vlrdespcustas' => 1,
                            'vlrdespadvogados' => 1,
                         ],
                        'ideadv' => [
                            'tpinsc' => 1,
                            'nrinsc' => "",
                            'vlradv' => 1
                         ]
                    ],
                    'infoperapur' => [
                        
                        'ideestablot' => [
                            'tpinsc' => 1,
                            'nrinsc' => "",
                            'codlotacao' => "",
                            'qtddiasav' => 1,
                            'remunperapur' => [
                                'matricula' => "",
                                'indsimples' => 1,
                                'itensremun' => [
                                    'codrubr' => "",
                                    'idetabrubr' => "",
                                    'qtdrubr' => "",
                                    'fatorrbr' => 1,
                                    'vrrubr' => 1,
                                    'indapurir' => 1
                                ],
                                'infoagnocivo' => [
                                    'grauexp' => 1
                                ]
                            ]
                        ],
                                'ideadc' => [
                                    'dtacconv' => "",
                                    'tpacconv' => "",
                                    'dsc' => "",
                                    'remunsuc' => 1,
                                    'ideperiodo' => [
                                        'perref' => "",
                                        'ideestablot' => [
                                            'tpinsc' => 1,
                                            'nrinsc' => "",
                                            'codlotacao' => ""
                                        ]
                                    ]
                                ],
                    ],
                    'infoperant' => [
                        'ideadc' => [
                            'dtacconv' => "",
                            'tpacconv' => "",
                            'dsc' => "",
                            'remunsuc' => 1,
                            'ideperiodo' => [
                                'perref' => "",
                                'ideestablot' => [
                                    'tpinsc' => 1,
                                    'nrinsc' => "",
                                    'codlotacao' => ""
                                ]
                            ]

                        ]
                    ],
                    'ideestablot' => [
                        'tpinsc' => "",
                        'nrinsc' => "",
                        'codlotacao' => "",
                        'qtddiasav' => 1,
                        'remunperapur' => [
                            'itensremun' => [
                                'codrubr' => "",
                                'idetabrubr' => "",
                                'qtdrubr' => "",
                                'fatorrbr' => 1,
                                'vrrubr' => 1
                            ],
                            'detoper' => [
                                'cnpjoper' => "",
                                'regans' => "",
                                'vrpgtit' => 1,
                                'detplano' => [
                                    'tpdep' => "",
                                    'cpfdep' => "",
                                    'nmdep' => "",
                                    'dtnascto' => "",
                                    'vlrpgdep' => 1
                                ]
                            ],
                            'infoagnocivo' => [
                                'grauexp' => 1
                            ],
                            'infotrabinterm' => [
                                'codconv' => ""
                            ]    
                        ],

                    ],
                    'ideadc' => [
                        'dtacconv' => "",
                        'tpacconv' => "",
                        'compacconv' => "",
                        'dtefacconv' => "",
                        'dsc' => "",
                        'remunsuc' => 1,
                        'ideperiodo' => [
                            'perref' => "",
                            'ideestablot' => [
                                'tpinsc' => 1,
                                'nrinsc' => "",
                                'codlotacao' => "",
                                'remunperapur' => [
                                    'matricula' => "",
                                    'indsimples' => 1,
                                    'itensremun' => [
                                        'codrubr' => "",
                                        'idetabrubr' => "",
                                        'qtdrubr' => "",
                                        'fatorrbr' => 1,
                                        'vrrubr' => 1
                                    ],
                                ]   
                            ]
                        ]
                    ],
                    'infocomplcont' => [
                        'codcbo' => "",
                        'natatividade' => 1,
                        'qtddiastrab' => 1 
                    ]
                ]
            ]
        );
    }
}

class dataEvtRemun{
    //$cpf;
}
?>