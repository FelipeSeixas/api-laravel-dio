/*
    "sequencial": {
        "required": false,
        "type": ["integer","null"],
        "minimum": 1,
        "maximum": 99999
    },
    "indretif": {
        "required": true,
        "type": "integer",
        "minimum": 1,
        "maximum": 2
    },
    "nrrecibo": {
        "required": false,
        "type": ["string","null"],
        "$ref": "#/definitions/recibo"
    },
    "indapuracao": {
        "required": true,
        "type": "integer",
        "minimum": 1,
        "maximum": 2
    },
    "perapur": {
        "required": true,
        "type": "string",
        "$ref": "#/definitions/periodo"
    },
    "indguia": {
        "required": false,
        "type": ["integer","null"],
        "minimum": 1,
        "maximum": 1
    },
    "cpftrab": {
        "required": true,
        "type": "string",
        "pattern": "^[0-9]{11}$"
    },
    "infomv": {
        "required": false,
        "type": ["object","null"],
        "properties": {
            "indmv": {
                "required": true,
                "type": "integer",
                "minimum": 1,
                "maximum": 3
            },
            "remunoutrempr": {
                "required": true,
                "type": "array",
                "minItems": 1,
                "maxItems": 999,
                "items": {
                    "type": "object",
                    "properties": {
                        "tpinsc": {
                            "required": true,
                            "type": "integer",
                            "minimum": 1,
                            "maximum": 2
                        },
                        "nrinsc": {
                            "required": true,
                            "type": "string",
                            "pattern": "^[0-9]{11,14}"
                        },
                        "codcateg": {
                            "required": true,
                            "type": "integer",
                            "minimum": 101,
                            "maximum": 999
                        },
                        "vlrremunoe": {
                            "required": true,
                            "type": "number"
                        }
                    }
                }
            }
        }
    },
    "infocomplem": {
        "required": false,
        "type": ["object","null"],
        "properties": {
            "nmtrab": {
                "required": true,
                "type": "string",
                "minLength": 2,
                "maxLength": 70
            },
            "dtnascto": {
                "required": true,
                "type": "string",
                "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
            },
            "sucessaovinc": {
                "required": false,
                "type": ["object","null"],
                "properties": {
                    "tpinsc": {
                        "required": true,
                        "type": "integer",
                        "minumum": 1,
                        "maximum": 2
                    },
                    "nrinsc": {
                        "required": true,
                        "type": "string",
                        "pattern": "^[0-9]{11,14}$"
                    },
                    "matricant": {
                        "required": false,
                        "type": ["string","null"],
                        "maxLength": 30
                    },
                    "dtadm": {
                        "required": true,
                        "type": "string",
                        "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
                    },
                    "observacao": {
                        "required": false,
                        "type": ["string","null"],
                        "maxLength": 255
                    }
                }
            }
        }
    },
    "procjudtrab": {
        "required": false,
        "type": ["array","null"],
        "minItems": 0,
        "maxItems": 99,
        "items": {
            "type": "object",
            "properties": {
                "tptrib": {
                    "required": true,
                    "type": "integer",
                    "minimum": 1,
                    "maximum": 2
                },
                "nrprocjud": {
                    "required": true,
                    "type": "string",
                    "maxLength": 20
                },
                "codsusp": {
                    "required": false,
                    "type": ["string","null"],
                    "pattern": "^[0-9]{1,14}$"
                }
            }
        }
    },
    "infointerm": {
        "required": false,
        "type": ["array","null"],
        "minItems": 0,
        "maxItems": 31,
        "items": {
            "properties": {
                "dia": {
                    "required": true,
                    "type": "integer",
                    "minimum": 1,
                    "maximum": 31
                }
            }
        }
    },
    "dmdev": {
        "required": true,
        "type": "array",
        "minItems": 1,
        "maxItems": 999,
        "items": {
            "type": "object",
            "properties": {
                "idedmdev": {
                    "required": true,
                    "type": "string",
                    "maxLength": 30
                },
                "codcateg": {
                    "required": true,
                    "type": "integer",
                    "minimum": 101,
                    "maximum": 999
                },
                "indrra": {
                    "required": false,
                    "type": ["string","null"],
                    "pattern": "^(S)$"
                },
                "inforra": {
                    "required": false,
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "tpprocrra": {
                            "required": true,
                            "type": "integer",
                            "minimum": 1,
                            "maximum": 2
                        },
                        "nrprocrra": {
                            "required": false,
                            "type": [
                                "string",
                                "null"
                            ],
                            "pattern": "^([0-9]{17}|[0-9]{20}|[0-9]{21}})$"
                        },
                        "descrra": {
                            "required": true,
                            "type": "string",
                            "minLength": 1,
                            "maxLength": 50
                        },
                        "qtdmesesrra": {
                            "required": true,
                            "type": "number"
                        },
                        "despprocjud": {
                            "required": false,
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "vlrdespcustas": {
                                    "required": true,
                                    "type": "number"
                                },
                                "vlrdespadvogados": {
                                    "required": true,
                                    "type": "number"
                                }
                            }
                        },
                        "ideadv": {
                                    "required": false,
                                    "type": [
                                        "array",
                                        "null"
                                    ],
                                    "minItems": 0,
                                    "maxItems": 99,
                                    "items": {
                                        "type": "object",
                                        "properties": {
                                            "tpinsc": {
                                                "required": true,
                                                "type": "integer",
                                                "minimum": 1,
                                                "maximum": 6
                                            },
                                            "nrinsc": {
                                                "required": true,
                                                "type": "string",
                                                "pattern": "^[0-9]{11,14}$"
                                            },
                                            "vlradv": {
                                                "required": true,
                                                "type": "number"
                                            }
                                        }
                                    }
                                }
                    }
                },
                "infoperapur": {
                    "required": false,
                    "type": ["object","null"],
                    "properties": {
                        "ideestablot": {
                            "required": true,
                            "type": "array",
                            "minItems": 1,
                            "maxItems": 500,
                            "items": {
                                "type": "object",
                                "properties": {
                                    "tpinsc": {
                                        "required": true,
                                        "type": "integer",
                                        "pattern": "^(1|3|4)$"
                                    },
                                    "nrinsc": {
                                        "required": true,
                                        "type": "string",
                                        "pattern": "^.{12,14}$"
                                    },
                                    "codlotacao": {
                                        "required": true,
                                        "type": "string",
                                        "pattern": "^.{1,30}$"
                                    },
                                    "qtddiasav": {
                                        "required": false,
                                        "type": ["integer","null"],
                                        "minumum": 1,
                                        "maximum": 31
                                    },
                                    "remunperapur": {
                                        "required": true,
                                        "type": "array",
                                        "minItems": 1,
                                        "maxItems": 8,
                                        "items": {
                                            "type": "object",
                                            "properties": {
                                                "matricula": {
                                                    "required": false,
                                                    "type": ["string","null"],
                                                    "pattern": "^.{1,30}$"
                                                },
                                                "indsimples": {
                                                    "required": false,
                                                    "type": ["integer","null"],
                                                    "minumum": 1,
                                                    "maximum": 3
                                                },
                                                "itensremun": {
                                                    "required": true,
                                                    "type": "array",
                                                    "minItems": 1,
                                                    "maxItems": 200,
                                                    "items": {
                                                        "type": "object",
                                                        "properties": {
                                                            "codrubr": {
                                                                "required": true,
                                                                "type": "string",
                                                                "pattern": "^.{1,30}$"
                                                            },
                                                            "idetabrubr": {
                                                                "required": true,
                                                                "type": "string",
                                                                "pattern": "^.{1,8}$"
                                                            },
                                                            "qtdrubr": {
                                                                "required": false,
                                                                "type": ["number","null"]
                                                            },
                                                            "fatorrbr": {
                                                                "required": false,
                                                                "type": ["number","null"]
                                                            },
                                                            "vrrubr": {
                                                                "required": true,
                                                                "type": "number"
                                                            },
                                                            "indapurir": {
                                                                "required": false,
                                                                "type": ["integer","null"],
                                                                "minumum": 0,
                                                                "maximum": 3
                                                            }
                                                        }
                                                    }
                                                },
                                                "infoagnocivo": {
                                                    "required": false,
                                                    "type": ["object","null"],
                                                    "properties": {
                                                        "grauexp": {
                                                            "required": true,
                                                            "type": "integer",
                                                            "minumum": 1,
                                                            "maximum": 4
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "infoperant": {
                    "required": false,
                    "type": ["object","null"],
                    "properties": {
                        "ideadc": {
                            "required": true,
                            "type": "array",
                            "minItems": 1,
                            "maxItems": 8,
                            "items": {
                                "type": "object",
                                "properties": {
                                    "dtacconv": {
                                        "required": false,
                                        "type": ["string","null"],
                                        "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
                                    },
                                    "tpacconv": {
                                        "required": true,
                                        "type": "string",
                                        "pattern": "^[A-I]{1}$"
                                    },
                                    "dsc": {
                                        "required": true,
                                        "type": "string",
                                        "pattern": "^.{1,255}$"
                                    },
                                    "remunsuc": {
                                        "required": true,
                                        "type": "number"
                                    },
                                    "ideperiodo": {
                                        "required": true,
                                        "type": "array",
                                        "minItems": 1,
                                        "maxItems": 180,
                                        "items": {
                                            "type": "object",
                                            "properties": {
                                                "perref": {
                                                    "required": true,
                                                    "type": "string",
                                                    "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])([-](0?[1-9]|1[0-2]))$"
                                                },
                                                "ideestablot": {
                                                    "required": true,
                                                    "type": "array",
                                                    "minItems": 1,
                                                    "maxItems": 500,
                                                    "items": {
                                                        "type": "object",
                                                        "properties": {
                                                            "tpinsc": {
                                                                "required": true,
                                                                "type": "integer",
                                                                "pattern": "^(1|3|4)$"
                                                            },
                                                            "nrinsc": {
                                                                "required": true,
                                                                "type": "string",
                                                                "pattern": "^[0-9]{11,14}"
                                                            },
                                                            "codlotacao": {
                                                                "required": true,
                                                                "type": "string",
                                                                "maxLength": 30
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "ideestablot": {
                    "required": false,
                    "type": ["array","null"],
                    "minItems": 0,
                    "maxItems": 500,
                    "items": {
                        "type": "object",
                        "properties": {
                            "tpinsc": {
                                "required": true,
                                "type": "string",
                                "pattern": "^(1|3|4)$"
                            },
                            "nrinsc": {
                                "required": true,
                                "type": "string",
                                "pattern": "^[0-9]{8,14}"
                            },
                            "codlotacao": {
                                "required": true,
                                "type": "string",
                                "maxLength": 30
                            },
                            "qtddiasav": {
                                "required": false,
                                "type": ["integer","null"],
                                "minimum": 1
                            },
                            "remunperapur": {
                                "required": true,
                                "type": "array",
                                "minItems": 1,
                                "maxItems": 8,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "matricula": {
                                            "required": false,
                                            "type": ["string","null"],
                                            "maxLength": 30
                                        },
                                        "indsimples": {
                                            "required": false,
                                            "type": ["integer","null"],
                                            "minimum": 1,
                                            "maximum": 3
                                        },
                                        "itensremun": {
                                            "required": true,
                                            "type": "array",
                                            "minItems": 1,
                                            "maxItems": 200,
                                            "items": {
                                                "type": "object",
                                                "properties": {
                                                    "codrubr": {
                                                        "required": true,
                                                        "type": "string",
                                                        "maxLength": 30
                                                    },
                                                    "idetabrubr": {
                                                        "required": true,
                                                        "type": "string",
                                                        "maxLength": 8
                                                    },
                                                    "qtdrubr": {
                                                        "required": false,
                                                        "type": ["number","null"]
                                                    },
                                                    "fatorrubr": {
                                                        "required": false,
                                                        "type": ["number","null"]
                                                    },
                                                    "vrrubr": {
                                                        "required": false,
                                                        "type": ["number","null"]
                                                    }
                                                }
                                            }
                                        },
                                        "detoper": {
                                            "required": false,
                                            "type": ["array","null"],
                                            "minItems": 0,
                                            "maxItems": 99,
                                            "items": {
                                                "type": "object",
                                                "properties": {
                                                    "cnpjoper": {
                                                        "required": true,
                                                        "type": "string",
                                                        "maxLength": 14,
                                                        "pattern": "^[0-9]"
                                                    },
                                                    "regans": {
                                                        "required": true,
                                                        "type": "string",
                                                        "minLength": 6,
                                                        "maxLength": 6
                                                    },
                                                    "vrpgtit": {
                                                        "required": true,
                                                        "type": "number"
                                                    },
                                                    "detplano": {
                                                        "required": false,
                                                        "type": ["array","null"],
                                                        "minItems": 0,
                                                        "maxItems": 99,
                                                        "items": {
                                                            "type": "object",
                                                            "properties": {
                                                                "tpdep": {
                                                                    "required": true,
                                                                    "type": "string",
                                                                    "maxLength": 2,
                                                                    "pattern": "^[0-9]"
                                                                },
                                                                "cpfdep": {
                                                                    "required": false,
                                                                    "type": ["string","null"],
                                                                    "maxLength": 11,
                                                                    "pattern": "^[0-9]"
                                                                },
                                                                "nmdep": {
                                                                    "required": true,
                                                                    "type": "string",
                                                                    "maxLength": 70
                                                                },
                                                                "dtnascto": {
                                                                    "required": true,
                                                                    "type": "string",
                                                                    "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
                                                                },
                                                                "vlrpgdep": {
                                                                    "required": true,
                                                                    "type": "number"
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        },
                                        "infoagnocivo": {
                                            "required": false,
                                            "type": ["object","null"],
                                            "properties": {
                                                "grauexp": {
                                                    "required": true,
                                                    "type": "integer",
                                                    "minimum": 1,
                                                    "maximum": 4
                                                }
                                            }
                                        },
                                        "infotrabinterm": {
                                            "required": false,
                                            "type": ["array","null"],
                                            "minItems": 0,
                                            "maxItems": 99,
                                            "items": {
                                                "type": "object",
                                                "properties": {
                                                    "codconv": {
                                                        "required": true,
                                                        "type": "string",
                                                        "maxLength": 30
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "ideadc": {
                    "required": false,
                    "type": ["array","null"],
                    "minItems": 0,
                    "maxItems": 8,
                    "items": {
                        "type": "object",
                        "properties": {
                            "dtacconv": {
                                "required": false,
                                "type": ["string","null"],
                                "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
                            },
                            "tpacconv": {
                                "required": true,
                                "type": "string",
                                "pattern": "^(A|B|C|D|E|F|G|H)$"
                            },
                            "compacconv": {
                                "required": false,
                                "type": ["string","null"],
                                "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])([-](0?[1-9]|1[0-2]))?$"
                            },
                            "dtefacconv": {
                                "required": false,
                                "type": ["string","null"],
                                "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])[-/](0?[1-9]|1[0-2])[-/](0?[1-9]|[12][0-9]|3[01])$"
                            },
                            "dsc": {
                                "required": true,
                                "type": "string",
                                "maxLength": 255
                            },
                            "remunsuc": {
                                "required": true,
                                "type": "string",
                                "maxLength": 1,
                                "pattern": "^(S|N)$"
                            },
                            "ideperiodo": {
                                "required": true,
                                "type": "array",
                                "minItems": 1,
                                "maxItems": 180,
                                "items": {
                                    "type": "object",
                                    "properties": {
                                        "perref": {
                                            "required": true,
                                            "type": "string",
                                            "pattern": "^(19[0-9][0-9]|2[0-9][0-9][0-9])([-](0?[1-9]|1[0-2]))?$"
                                        },
                                        "ideestablot": {
                                            "required": true,
                                            "type": "array",
                                            "minItems": 1,
                                            "maxItems": 500,
                                            "items": {
                                                "type": "object",
                                                "properties": {
                                                    "tpinsc": {
                                                        "required": true,
                                                        "type": "integer",
                                                        "pattern": "^(1|3|4)$"
                                                    },
                                                    "nrinsc": {
                                                        "required": true,
                                                        "type": "string",
                                                        "pattern": "^[0-9]{8,14}"
                                                    },
                                                    "codlotacao": {
                                                        "required": true,
                                                        "type": "string",
                                                        "maxLength": 30
                                                    },
                                                    "remunperant": {
                                                        "required": true,
                                                        "type": "array",
                                                        "minItems": 1,
                                                        "maxItems": 8,
                                                        "items": {
                                                            "type": "object",
                                                            "properties": {
                                                                "matricula": {
                                                                    "required": false,
                                                                    "type": ["string","null"],
                                                                    "maxLength": 30
                                                                },
                                                                "indsimples": {
                                                                    "required": false,
                                                                    "type": ["integer","null"],
                                                                    "minimum": 1,
                                                                    "maximum": 3
                                                                },
                                                                "itensremun": {
                                                                    "required": true,
                                                                    "type": "array",
                                                                    "minItems": 1,
                                                                    "maxItems": 200,
                                                                    "items": {
                                                                        "type": "object",
                                                                        "properties": {
                                                                            "codrubr": {
                                                                                "required": true,
                                                                                "type": "string",
                                                                                "maxLength": 30
                                                                            },
                                                                            "idetabrubr": {
                                                                                "required": true,
                                                                                "type": "string",
                                                                                "maxLength": 8
                                                                            },
                                                                            "qtdrubr": {
                                                                                "required": false,
                                                                                "type": ["number","null"]
                                                                            },
                                                                            "fatorrubr": {
                                                                                "required": false,
                                                                                "type": ["number","null"]
                                                                            },
                                                                            "vrrubr": {
                                                                                "required": true,
                                                                                "type": "number"
                                                                            }
                                                                        }
                                                                    }
                                                                },
                                                                "infoagnocivo": {
                                                                    "required": false,
                                                                    "type": ["object","null"],
                                                                    "properties": {
                                                                        "grauexp": {
                                                                            "required": true,
                                                                            "type": "integer",
                                                                            "minimum": 1,
                                                                            "maximum": 4
                                                                        }
                                                                    }
                                                                },
                                                                "infotrabinterm": {
                                                                    "required": false,
                                                                    "type": ["array","null"],
                                                                    "minItems": 0,
                                                                    "maxItems": 99,
                                                                    "items": {
                                                                        "type": "object",
                                                                        "properties": {
                                                                            "codconv": {
                                                                                "required": true,
                                                                                "type": "string",
                                                                                "maxLength": 30
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "infocomplcont": {
                    "required": false,
                    "type": ["object","null"],
                    "properties": {
                        "codcbo": {
                            "required": true,
                            "type": "string",
                            "pattern": "^[0-9]{4,6}$"
                        },
                        "natatividade": {
                            "required": false,
                            "type": ["integer","null"],
                            "minimum": 1,
                            "maximum": 2
                        },
                        "qtddiastrab": {
                            "required": false,
                            "type": ["integer","null"],
                            "minimum": 1,
                            "maximum": 31
                        }
                    }
                }
            }
    }
*/