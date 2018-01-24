
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
        }
        .titulo{
            color: #30a5ff;
            font-size: 18px;
        }
    </style>


                    <div class="row">
                                    <form class="form-horizontal" id="header_recontagem" action="{{ route('recontagem.store')}}" method="post">
                                    <div class="col-md-10 col-md-offset-1">
                                        @include('admin.cabecalho')
                                    </div>
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
                                                    <th colspan="2" class="linha-cin text-center" style="color: #30a5ff"> Número da página</th>
                                                    <th width="215" class="linha-cin"><input id="add_fields" name="add_fields" type="number" class="form-control nrPagina" placeholder="0"></th>
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
        $(document).ready(function () {
            var linhas='<tr>' +
                '<td> <input id="' + 'contraceptivos' + i + '" name="' + 'contraceptivos' + i + '" type="number" class="form-control tableInput" min="0"></td></tr>';

            $('#corpo').html(linhas);
        })
    </script>

@endsection()