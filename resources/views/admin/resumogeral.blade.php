
@extends('admin.layout.layout')
@section('content')

    <style>
        .nav-tabs {
            background: #eeeeee;
    </style>

    <div class="container">

        <div class="row" style="background: white">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Resumo</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Stock</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <!--Lista de produtos -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="white-box">
                                    <div class="card">
                                        <h5 class="card-header">Avaliação de Livro de Registro</h5>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                    <table class="table display nowrap "  id="resumo" cellspacing="0" style="width: 100%">
                                                        <thead>
                                                        <th>DATA DQA</th>
                                                        <th>DATA INICIO DQA</th>
                                                        <th>DATA FIM DQA</th>
                                                        <th>PROVINCIA</th>
                                                        <th>TIPO FRANQUIA</th>
                                                        <th>MODELO FRANQUIA</th>
                                                        <th>NOME FRANQUIA</th>
                                                        <th>FAIXA ETARIA</th>
                                                        <th>ATIVIDADE</th>
                                                        <th>TIPO ATIVIDADE</th>
                                                        <th>TOTAL RECONTAGEM LIVRO</th>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--and lista de produtos -->


                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <!--Lista de produtos -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="white-box">
                                    <div class="card">
                                        <h5 class="card-header">Avaliação do Stock</h5>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                    <table class="table display nowrap "  id="stock" cellspacing="0" style="width: 100%">
                                                        <thead>
                                                        <th>DATA DQA</th>
                                                        <th>DATA INICIO DQA</th>
                                                        <th>DATA FIM DQA</th>
                                                        <th>PROVINCIA</th>
                                                        <th>TIPO FRANQUIA</th>
                                                        <th>MODELO FRANQUIA</th>
                                                        <th>NOME FRANQUIA</th>
                                                        <th>FAIXA ETARIA</th>
                                                        <th>ATIVIDADE</th>
                                                        <th>TIPO ATIVIDADE</th>
                                                        <th>SALDO SALESFORCE</th>
                                                        <th>SALDO SALESFORCE</th>
                                                        <th>SALDO SALESFORCE</th>
                                                        <th>SALDO SALESFORCE</th>
                                                        <th>SALDO SALESFORCE</th>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--and lista de produtos -->


                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#resumo').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );


        } );
    </script>
    <script>
        $(document).ready(function() {
            $('#stock').DataTable( {
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