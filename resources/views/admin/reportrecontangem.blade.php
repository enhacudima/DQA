


@extends('admin.layout.layout')


@section('content')

    <style>
        .nav-tabs {
            background: #eeeeee;
        }
    </style>



    <div class="container">

            <!--Livro de registro -->
            <div role="tabpanel" class="tab-pane active" id="recontagem">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="card">
                                <h5 class="card-header">Recontagem do Livro de Registro</h5>
                                <div class="panel-body">
                                    <div class="row">
                                        <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                            <table class="table display nowrap "  id="rec" cellspacing="0" style="width: 100%">

                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>DATA DQA</th>
                                                    <th>DATA INICIO DQA</th>
                                                    <th>DATA FIM DQA</th>
                                                    <th>NÚMERO DO LIVRO</th>
                                                    <th>NÚMERO DA PAGINA</th>
                                                    <th>ATIVIDADE</th>
                                                    <th>TIPO ATIVIDADE</th>
                                                    <th>FAIXA ETARIA</th>
                                                    <th>TOTAL</th>
                                                    <th>ID FRANQUIA</th>
                                                    <th>PROVINCIA</th>
                                                    <th>DISTRITO</th>
                                                    <th>BAIRRO</th>
                                                    <th>TIPO FRANQUIA</th>
                                                    <th>MODELO FRANQUIA</th>
                                                    <th>NOME FRANQUIA</th>
                                                    <th>NOME ENFERMEIRA</th>
                                                    <th>TELEFONE</th>
                                                    <th>LAT</th>
                                                    <th>LOG</th>
                                                    <th>USUARIO</th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($recontagems as $cli)
                                                    <tr>
                                                        <td>{{$cli->id}}</td>
                                                        <td>{{$cli->data_dqa}}</td>
                                                        <td>{{$cli->data_inicio}}</td>
                                                        <td>{{$cli->data_fim}}</td>
                                                        <td>{{$cli->nr_livro}}</td>
                                                        <td>{{$cli->nr_pagina}}</td>
                                                        <td>{{$cli->atividade}}</td>
                                                        <td>{{$cli->tipo_atividade}}</td>
                                                        <td>{{$cli->faixa_etaria}}</td>
                                                        <td>{{$cli->total}}</td>
                                                        <td>{{$cli->franquia_id}}</td>
                                                        <td>{{$cli->province}}</td>
                                                        <td>{{$cli->districts}}</td>
                                                        <td>{{$cli->bairro}}</td>
                                                        <td>{{$cli->tipo}}</td>
                                                        <td>{{$cli->modelo}}</td>
                                                        <td>{{$cli->franquia}}</td>
                                                        <td>{{$cli->enfermeira}}</td>
                                                        <td>{{$cli->telefone}}</td>
                                                        <td>{{$cli->lat}}</td>
                                                        <td>{{$cli->log}}</td>
                                                        <td>{{$cli->user}}</td>

                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    <script>
        $(document).ready(function() {
            $('#rec').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );


        } );
    </script>



@endsection()