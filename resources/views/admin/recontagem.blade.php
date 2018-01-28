
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
        .titulo{
            color: #30a5ff;
            font-size: 18px;
        }
    </style>


                    <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        @include('admin.cabecalho')
                                    </div>
                                    <form class="form-horizontal" id="header_recontagem" onsubmit="return false;" action="{{ route('recontagem.store')}}" method="post">
                    <!--htlm-->
                        <div class="panel panel-default col-md-12" id="contTabela">

                                <div class="panel-heading"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg>Recontagem Livro de registo</div>
                                <div class="panel-body">

                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input id="headerID" type="hidden">
                                        <fieldset>
                                            <table  class="table table-bordered table-hover table-sortable">
                                                <thead>
                                                <tr id="tHeader1">
                                                    <th colspan="7" class="text-center titulo"> Registos por pagina</th>
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
                                                                    <input type="text" class="form-control text-center nrPagina" value="1" min="1">
                                                                    <span class="input-group-btn data-up">
                                                                        <button class="btn botao-nr-pag" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th colspan="4"></th>
                                                </tr>
                                                <tr id="tHeader2">
                                                    <th colspan="2" class="text-center">Desagredação</th>
                                                    <th>&le;19 anos</th>
                                                    <th>20 - 24 anos</th>
                                                    <th>&ge;25 anos</th>
                                                    <th>N/A</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody id="corpo">
                                                <!--Linha 1 (Distribuição de contraceptivos 25+ e 25-)-->
                                                    <tr>
                                                        <td colspan="2">Distribuição de contraceptivos 25+ e 25-</td>
                                                        <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        <td><input type="number" class="form-control tableInput" min="0"></td>
                                                        <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                    </tr>

                                                    <!--Linha 2 (Nova utente de PF)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Nova utente de PF</td>
                                                            <td>Pílula</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Injectavel</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Implante</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>DIU</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 3 (Continuadora de PF)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="4">Continuadora de PF</td>
                                                            <td>Pílula</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Injectavel</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Implante</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>DIU</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Pílula)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Pílula</td>
                                                            <td>Utentes Novas no método</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Utentes que continuam o metodo</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Total de ciclos</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Injectavel)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="4">Injectaveis</td>
                                                            <td>Utentes Novas</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Utentes seguintes</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total de injectaveis por tipo</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (Implante)-->
                                                    <tr class="linha-cin">
                                                        <tr class="linha-cin">
                                                            <td rowspan="4">Implante</td>
                                                            <td>Utentes Novas</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Utentes que continuam o método</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr class="linha-cin">
                                                            <td>Total de Implantes por tipo</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                    <!--Linha 4 (DIU)-->
                                                    <tr class="linha-cin">
                                                        <tr>
                                                            <td rowspan="3">DIU</td>
                                                            <td>Utentes Novas</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Utentes que continuam o método</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total de DIU por tipo</td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0"></td>
                                                            <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                        </tr>
                                                    </tr>

                                                <tr>
                                                    <tr>
                                                    <td colspan="2">N/A</td>
                                                    <td><input type="number" class="form-control tableInput" min="0"></td>
                                                    <td><input type="number" class="form-control tableInput" min="0"></td>
                                                    <td><input type="number" class="form-control tableInput" min="0"></td>
                                                    <td><input type="number" class="form-control tableInput" min="0"></td>
                                                    <td><input type="number" class="form-control tableInput" min="0" disabled></td>
                                                    </tr>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </fieldset>

                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 widget-left">
                                                <button name="submit" type="submit" class="btn btn-success btn-md pull-left col-md-3" onclick="confirmarTransacao();">Gravar</button>
                                            </div>
                                        </div>
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
            $(".number-spinner button").mousedown(function () {
                btn = $(this);
                input = btn.closest('.number-spinner').find('input');
                btn.closest('.number-spinner').find('button').prop("disabled", false);

                if (btn.attr('data-dir') == 'up') {
                    action = setInterval(function(){
                        if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                            input.val(parseInt(input.val())+1);
                        }else{
                            btn.prop("disabled", true);
                            clearInterval(action);
                        }
                    }, 50);
                } else {
                    action = setInterval(function(){
                        if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                            input.val(parseInt(input.val())-1);
                        }else{
                            btn.prop("disabled", true);
                            clearInterval(action);
                        }
                    }, 50);
                }
            }).mouseup(function(){
                clearInterval(action);
            });
        });
    </script>

@endsection()