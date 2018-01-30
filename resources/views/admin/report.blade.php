<?php
$produtos = \App\Produto::all();
$franquias = \App\Franquia::all();
$users=\App\User::all();

?>

@extends('admin.layout.layout')
@section('content')

    <style>

    </style>




<div class="col-md-12 col-md-offset-0">

    <div class="row">
        <div class="col-md-3">

            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Lista de Produtos</h5>
                    <div class="panel-body">
                        <div class="row">
                            <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                <table class="table display nowrap "  id="produto" cellspacing="0" style="width: 100%">
                                    <thead>
                                    <th>Produto</th>
                                    <th>Descrição</th>
                                    <th>Unidade</th>
                                    <th>Codigo</th>
                                    </thead>
                                    <tbody>
                                    @foreach($produtos as $cli)
                                        <tr>
                                            <td>{{$cli->nome}}</td>
                                            <td>{{$cli->descricao}}</td>
                                            <td>{{$cli->unidade}}</td>
                                            <td>{{$cli->codigo}}</td>

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
        <div class="col-md-9">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Lista de Franquias</h5>
                    <div class="panel-body">
                        <div class="row">
                            <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                <table class="table display nowrap "  id="franquia" cellspacing="0" style="width: 100%">
                                    <thead>
                                    <th>ID</th>
                                    <th>Provincia</th>
                                    <th>Distrito</th>
                                    <th>Bairro</th>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Nome</th>
                                    <th>Enfermeira</th>
                                    <th>Nome</th>
                                    <th>Observações</th>
                                    <th>Lat</th>
                                    <th>log</th>

                                    </thead>
                                    <tbody>
                                    @foreach($franquias as $cli)
                                        <tr>


                                            <td>{{$cli->franquia_id}}</td>
                                            <td>{{$cli->province}}</td>
                                            <td>{{$cli->districts}}</td>
                                            <td>{{$cli->bairro}}</td>
                                            <td>{{$cli->tipo}}</td>
                                            <td>{{$cli->modelo}}</td>
                                            <td>{{$cli->nome}}</td>
                                            <td>{{$cli->enfermeira}}</td>
                                            <td>{{$cli->telefone}}</td>
                                            <td>{{$cli->observacoes}}</td>
                                            <td>{{$cli->lat}}</td>
                                            <td>{{$cli->log}}</td>


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
    <div class="row">
        <div class="col-md-4">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Lista de Uruarios</h5>
                    <div class="panel-body">
                        <div class="row">
                            <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                <table class="table display nowrap "  id="user" cellspacing="0" style="width: 100%">

                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Grupo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $cli)
                                            <tr>
                                                <td>{{$cli->name}}</td>
                                                <td>{{$cli->email}}</td>
                                                @if( $cli->grupo == 2)
                                                    <td>Admin</td>
                                                @else
                                                    <td>Normal</td>
                                                @endif

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


    <script>
        $(document).ready(function() {
            $('#produto').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );


        } );
    </script>

    <script>
        $(document).ready(function() {
            $('#franquia').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );


        } );
    </script>


    <script>
        $(document).ready(function() {
            $('#user').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );


        } );
    </script>





@endsection()