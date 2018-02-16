
@extends('admin.layout.layout')
@section('content')

    <style>
        #nr-campos{
            background: #f8fbf8;
            margin-bottom: 20px;
            padding: 15px;
        }
        .page-title{
            color: #30a5ff;
            margin-left: 10px;

        }


        .form-inline .form-group { margin-right:10px; }
        .well-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(66, 139, 202);
            border-color: rgb(53, 126, 189);

        }
        .glyphicon { margin-right:5px; }

        .linha-cin{
            background: #f9fbe7;
        }

        .nrPagina{
            border: 1px solid #30a5ff;
            box-shadow: inset 0px 0px 0px 1px #30a5ff;
            color: #222;
        }
        .botao-nr-pag{
            color: #FFFFFF;
            background: #30a5ff;
        }
        .btn-val{
            color: #fff;
            background: #1f22255c;
        }
        .titulo{
            color: #30a5ff;
            font-size: 18px;
        }
    </style>


                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            @include('admin.cabecalho')
                                            <div class="alert alert-success hidden text-center"></div>
                                        </div>
                                    <form class="form-horizontal" id="header_recontagem" onsubmit="return false;">
                    <!--htlm-->

                        <div class="panel panel-default col-md-12" id="contTabela">

                                <div class="panel-heading"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Recontagem Livro de registo</div>
                                <div class="panel-body">

                                        {{ csrf_field() }}
                                        <input id="headerID" type="hidden">
                                        <fieldset>
                                            <table  class="table table-bordered table-hover table-sortable">
                                                <thead>
                                                <tr id="tHeader1">
                                                    <th colspan="6" class="text-center titulo"> Registos por pagina</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="linha-cin text-right" style="color: #30a3ff;"> Número da página</th>
                                                    <th class="linha-cin">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn botao-nr-pag" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                    <input type="number" id="nrPagina" name="nrPagina" class="form-control text-center nrPagina index" value="1" min="1">
                                                                    <span class="input-group-btn data-up">
                                                                        <button class="btn botao-nr-pag" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th colspan="3"></th>
                                                </tr>
                                                <tr id="tHeader2">
                                                    <th colspan="2" class="text-center">Desagredação</th>
                                                    <th>&le;19 anos</th>
                                                    <th>20 - 24 anos</th>
                                                    <th>&ge;25 anos</th>
                                                    <th>N/A</th>
                                                </tr>
                                                </thead>
                                                <tbody id="corpo">
                                                <!--Linha 1 (Distribuição de contraceptivos 25+ e 25-)-->
                                                    <tr>
                                                        <td colspan="2">Distribuição de contraceptivos 25+ e 25-</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="col-xs-12">
                                                                <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                    <input type="number" name="dc_na" id="dc_na" class="form-control text-center tableInput" value="0" min="0">
                                                                    <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!--Linha 2 (Nova utente de PF)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Nova utente de PF</td>
                                                            <td>Pílula</td>
                                                    <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                                <span class="input-group-btn data-dwn">
                                                                                    <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                                </span>
                                                                        <input type="number" name="nup_pill_19" id="nup_pill_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                                    <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                    </td>

                                                    <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                                <span class="input-group-btn data-dwn">
                                                                                    <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                                </span>
                                                                        <input type="number" name="nup_pill_24" id="nup_pill_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                                    <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                    </td>
                                                    <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                                <span class="input-group-btn data-dwn">
                                                                                    <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                                </span>
                                                                        <input type="number" name="nup_pil_25" id="nup_pil_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                                    <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                    </td>
                                                    <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                                <span class="input-group-btn data-dwn">
                                                                                    <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                                </span>
                                                                        <input type="number" name="nup_pil_na" id="nup_pil_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                                    <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                    </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Injectavel</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_inj_19" id="nup_inj_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_inj_24" id="nup_inj_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_inj_25" id="nup_inj_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_inj_na" id="nup_inj_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Implante</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_imp_19" id="nup_imp_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_imp_24" id="nup_imp_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_imp_25" id="nup_imp_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_imp_na" id="nup_imp_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>DIU</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_diu_19" id="nup_diu_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_diu_24" id="nup_diu_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_diu_25" id="nup_diu_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="nup_diu_na" id="nup_diu_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 3 (Continuadora de PF)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="4">Continuadora de PF</td>
                                                            <td>Pílula</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="cp_pil_19" id="cp_pil_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="cp_pil_24" id="cp_pil_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="cp_pil_25" id="cp_pil_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="cp_pil_na" id="cp_pil_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Injectavel</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_inj_19" id="cp_inj_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_inj_24" id="cp_inj_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_inj_25" id="cp_inj_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_inj_na" id="cp_inj_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Implante</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_imp_19" id="cp_imp_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_imp_24" id="cp_imp_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_imp_25" id="cp_imp_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_imp_na" id="cp_imp_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>DIU</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_diu_19" id="cp_diu_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_diu_24" id="cp_diu_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_diu_25" id="cp_diu_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="cp_diu_na" id="cp_diu_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Pílula)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Pílula</td>
                                                            <td>Utentes Novas no método</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="pil_unm_19" id="pil_unm_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="pil_unm_24" id="pil_unm_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="pil_unm_25" id="pil_unm_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="pil_unm_na" id="pil_unm_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Utentes que continuam o metodo</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_ucm_19" id="pil_ucm_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_ucm_24" id="pil_ucm_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_ucm_25" id="pil_ucm_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_ucm_na" id="pil_ucm_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Total de ciclos</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_tc_19" id="pil_tc_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_tc_24" id="pil_tc_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_tc_25" id="pil_tc_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="pil_tc_na" id="pil_tc_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Injectavel)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="4">Injectaveis</td>
                                                            <td>Utentes Novas</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="inj_un_19" id="inj_un_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="inj_un_24" id="inj_un_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="inj_un_25" id="inj_un_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="inj_un_na" id="inj_un_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Utentes seguintes</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_us_19" id="inj_us_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_us_24" id="inj_us_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_us_25" id="inj_us_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_us_na" id="inj_us_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total de injectaveis por tipo</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_tipt_19" id="inj_tipt_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_tipt_24" id="inj_tipt_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_tipt_25" id="inj_tipt_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="inj_tipt_na" id="inj_tipt_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Implante)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Implante</td>
                                                            <td>Utentes Novas</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="imp_un_19" id="imp_un_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="imp_un_24" id="imp_un_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="imp_un_25" id="imp_un_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="imp_un_na" id="imp_un_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Utentes que continuam o método</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_ucm_19" id="imp_ucm_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_ucm_24" id="imp_ucm_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_ucm_25" id="imp_ucm_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_ucm_na" id="imp_ucm_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Total de Implantes por tipo</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_tipt_19" id="imp_tipt_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_tipt_24" id="imp_tipt_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_tipt_25" id="imp_tipt_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="imp_tipt_na" id="imp_tipt_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (DIU)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="3">DIU</td>
                                                            <td>Utentes Novas</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="diu_un_19" id="diu_un_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="diu_un_24" id="diu_un_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="diu_un_25" id="diu_un_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="diu_un_na" id="diu_un_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Utentes que continuam o método</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_ucm_19" id="diu_ucm_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_ucm_24" id="diu_ucm_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_ucm_25" id="diu_ucm_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_ucm_na" id="diu_ucm_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total de DIU por tipo</td>
                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_tdpt_19" id="diu_tdpt_19" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_tdpt_24" id="diu_tdpt_24" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_tdpt_25" id="diu_tdpt_25" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="col-xs-12">
                                                                    <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                        <input type="number" name="diu_tdpt_na" id="diu_tdpt_na" class="form-control text-center tableInput" value="0" min="0">
                                                                        <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tr>

                                                <tr>
                                                    <tr>
                                                    <td colspan="2">N/A</td>
                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="na_19" id="na_19" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="na_24" id="na_24" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="na_25" id="na_25" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="col-xs-12">
                                                            <div class="input-group number-spinner">
                                                                    <span class="input-group-btn data-dwn">
                                                                        <button class="btn btn-val " data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                    </span>
                                                                <input type="number" name="na_na" id="na_na" class="form-control text-center tableInput" value="0" min="0">
                                                                <span class="input-group-btn data-up">
                                                                        <button class="btn btn-val " data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </tr >
                                                </tr>
                                                </tbody>
                                            </table>
                                        </fieldset>
                                </div>
                           </div>
                        </form>
                    </div>
    </div>
    <script>
        /**
         * Input adicionar o numero de página
         */
        $(function() {
            var action;

            $(".number-spinner button").click(function () {
                btn = $(this);
                input = btn.closest('.number-spinner').find('input');
                btn.closest('.number-spinner').find('button').prop("disabled", false);

                if (btn.attr('data-dir') == 'up') {
                    if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                        input.val(parseInt(input.val())+1);
                    }else{
                        btn.prop("disabled", true);
                    }
                } else {
                    if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                        input.val(parseInt(input.val())-1);
                    }else{
                        btn.prop("disabled", true);
                    }
                }
                if(input.attr('name')=='nrPagina')
                    fillFiels();
                else {
                    btn.css('color', '#ddd');
                    save($(this).closest('.number-spinner').find('input'));
                }

            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.tableInput').prop("disabled", true);
            $('.btn-val').prop("disabled", true);
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        //pega todos os dados do formulário e retorna um array onde o indice é o nome do input
        function getFormObj(formId) {
            var formObj = {};
            var inputs = $('#'+formId).serializeArray();
            $.each(inputs, function (i, input) {
                formObj[input.name] = input.value;
            });
            return formObj;
        }

        var input = null;
        $('.tableInput').change(function () {
            save($(this));
        })
        /*
        $('.btn-val').click(function () {
            save($(this).closest('.number-spinner').find('input'));
        });
*/
        function save(input) {
            var formData = getFormObj('cabec');
            var nr_pagina = $('#nrPagina').val();

                if(input.attr('name')!='nrPagina')
                if(formData.franquia_id && formData.data_DQA && formData.data_inicio && formData.data_Fim){
                    //input = $(this);
                    var valor = input.val(); //get value from input
                    var name = input.attr("name"); //get input name
                    //alert(name);

                    console.log(formData);

                    $.ajax({
                        type: "get",
                        url: '{{url('/save/recontagem')}}',
                        data: {data: formData, nr_pagina: nr_pagina, total: valor, codigo: name},
                        success: function (data) {
                            input.css("background-color", "#c5e1a5");

                            console.log(data);
                        },

                        error: function (data) {
                            input.css("background-color", "rgba(245, 170, 78, 0.38)");
                            console.log(data);
                        }
                    })
                }else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        }


        $('.index').change(function () {
            fillFiels();
        });

        function fillFiels(){
            $('.tableInput').val('0');
            $('.tableInput').css("background-color", "#fff");

            var formData = getFormObj('cabec');
            var nrPagina = $('#nrPagina').val();

            if(formData.franquia_id && formData.data_DQA && formData.data_inicio && formData.data_Fim && nrPagina){
                $('.tableInput').prop("disabled", false);
                $('.btn-val').prop("disabled", false);
                $.ajax({
                    type: "get",
                    url: '{{url('/getAll/recontagem')}}',
                    data: {data: formData, nr_pagina: nrPagina},
                    success: function (data) {
                        for(i=0; i<data.length; i++){
                            $('#'+data[i].codigo).val(data[i].total);
                           // $('#'+data[i].codigo).css("background-color", "#c5e1a5");
                        }
                        console.log(data);
                    },

                    error: function (data) {
                        console.log(data);
                    }
                })
            }else $('.tableInput').prop("disabled", true);
        }

        $('.tableInput').click(function () {
           $(this).css('background','#fff');
        });

    </script>



@endsection()