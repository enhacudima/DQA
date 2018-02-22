


@extends('admin.layout.layout')


@section('content')

    <style>
        .nav-tabs {
            background: #eeeeee;
        }
    </style>



    <div class="container">
        <div class="row"style="background: white">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#contagem" aria-controls="contagem" role="tab" data-toggle="tab">CONTAGEM</a></li>
                    <li role="presentation"><a href="#questionarios" aria-controls="questionarios" role="tab" data-toggle="tab">QUESTIONARIOS</a></li>
                    <li role="presentation"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">UPLOAD</a></li>
                    <li role="presentation"><a href="#parametrizacao" aria-controls="parametrizacao" role="tab" data-toggle="tab">PARAMETRIZAÇÃO</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!--questionarios-->
                    <div role="tabpanel" class="tab-pane" id="questionarios">
                        <div class="container">
                            <div class="row"style="background: white">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#qstock" aria-controls="qstock" role="tab" data-toggle="tab">Questionario Stock</a></li>
                                        <li role="presentation"><a href="#qrecontagem" aria-controls="qrecontagem" role="tab" data-toggle="tab">Questionario Recontagem</a></li>
                                        <li role="presentation"><a href="#qverificacao" aria-controls="qverificacao" role="tab" data-toggle="tab">Questionario Verificação</a></li>
                                        <li role="presentation"><a href="#rdqa" aria-controls="rdqa" role="tab" data-toggle="tab">Questionario RDQA</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <!--QUESTIONARIO stock -->
                                        <div role="tabpanel" class="tab-pane active" id="qstock">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">QUESTIONARIO STOCK</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="questionario_stock" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>QUESTÃO</th>
                                                                                <th>RESPOSTA</th>
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

                                                                            @if(isset($questionario_stocks))
                                                                                @foreach($questionario_stocks as $cli)
                                                                                    <tr>

                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->questao}}</td>
                                                                                        <td>{{$cli->resposta}}</td>
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
                                                                            @endif
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

                                        <!--questionario recontagem -->
                                        <div role="tabpanel" class="tab-pane" id="qrecontagem">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">QUESTIONARIO RECONTAGEM</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="questionario_recontagem" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>QUESTÃO</th>
                                                                                <th>RESPOSTA</th>
                                                                                <th>PROVINCIA</th>
                                                                                <th>DISTRITO</th>
                                                                                <th>BAIRRO</th>
                                                                                <th>ID FRANQUIA</th>
                                                                                <th>NOME FRANQUIA</th>
                                                                                <th>TIPO FRANQUIA</th>
                                                                                <th>MODELO FRANQUIA</th>
                                                                                <th>NOME ENFERMEIRA</th>
                                                                                <th>TELEFONE</th>
                                                                                <th>LAT</th>
                                                                                <th>LOG</th>
                                                                                <th>USUARIO</th>


                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @if(isset($questionario_recontagem))
                                                                                @foreach($questionario_recontagem as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->questao}}</td>
                                                                                        <td>{{$cli->resposta}}</td>
                                                                                        <td>{{$cli->province}}</td>
                                                                                        <td>{{$cli->districts}}</td>
                                                                                        <td>{{$cli->bairro}}</td>
                                                                                        <td>{{$cli->franquia_id}}</td>
                                                                                        <td>{{$cli->franquia}}</td>
                                                                                        <td>{{$cli->tipo}}</td>
                                                                                        <td>{{$cli->modelo}}</td>
                                                                                        <td>{{$cli->enfermeira}}</td>
                                                                                        <td>{{$cli->telefone}}</td>
                                                                                        <td>{{$cli->lat}}</td>
                                                                                        <td>{{$cli->log}}</td>
                                                                                        <td>{{$cli->user}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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

                                        <!--questionario RDQA -->
                                        <div role="tabpanel" class="tab-pane" id="qverificacao">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">QUESTIONARIO VERIFICAÇÃO</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="questionario_verificacao" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>QUESTÃO</th>
                                                                                <th>RESPOSTA</th>
                                                                                <th>PROVINCIA</th>
                                                                                <th>DISTRITO</th>
                                                                                <th>BAIRRO</th>
                                                                                <th>ID FRANQUIA</th>
                                                                                <th>NOME FRANQUIA</th>
                                                                                <th>TIPO FRANQUIA</th>
                                                                                <th>MODELO FRANQUIA</th>
                                                                                <th>NOME ENFERMEIRA</th>
                                                                                <th>TELEFONE</th>
                                                                                <th>LAT</th>
                                                                                <th>LOG</th>
                                                                                <th>USUARIO</th>


                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @if(isset($questionario_verificacao))
                                                                                @foreach($questionario_verificacao as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->questao}}</td>
                                                                                        <td>{{$cli->resposta}}</td>
                                                                                        <td>{{$cli->province}}</td>
                                                                                        <td>{{$cli->districts}}</td>
                                                                                        <td>{{$cli->bairro}}</td>
                                                                                        <td>{{$cli->franquia_id}}</td>
                                                                                        <td>{{$cli->franquia}}</td>
                                                                                        <td>{{$cli->tipo}}</td>
                                                                                        <td>{{$cli->modelo}}</td>
                                                                                        <td>{{$cli->enfermeira}}</td>
                                                                                        <td>{{$cli->telefone}}</td>
                                                                                        <td>{{$cli->lat}}</td>
                                                                                        <td>{{$cli->log}}</td>
                                                                                        <td>{{$cli->user}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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

                                        <!--questionario VERIFICACAO -->
                                        <div role="tabpanel" class="tab-pane" id="rdqa">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">QUESTIONARIO RDQA</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="questionario_rdqa" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>QUESTÃO</th>
                                                                                <th>RESPOSTA</th>
                                                                                <th>PROVINCIA</th>
                                                                                <th>DISTRITO</th>
                                                                                <th>BAIRRO</th>
                                                                                <th>ID FRANQUIA</th>
                                                                                <th>NOME FRANQUIA</th>
                                                                                <th>TIPO FRANQUIA</th>
                                                                                <th>MODELO FRANQUIA</th>
                                                                                <th>NOME ENFERMEIRA</th>
                                                                                <th>TELEFONE</th>
                                                                                <th>LAT</th>
                                                                                <th>LOG</th>
                                                                                <th>USUARIO</th>


                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @if(isset($questionario_rdqa))
                                                                                @foreach($questionario_rdqa as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->questao}}</td>
                                                                                        <td>{{$cli->resposta}}</td>
                                                                                        <td>{{$cli->province}}</td>
                                                                                        <td>{{$cli->districts}}</td>
                                                                                        <td>{{$cli->bairro}}</td>
                                                                                        <td>{{$cli->franquia_id}}</td>
                                                                                        <td>{{$cli->franquia}}</td>
                                                                                        <td>{{$cli->tipo}}</td>
                                                                                        <td>{{$cli->modelo}}</td>
                                                                                        <td>{{$cli->enfermeira}}</td>
                                                                                        <td>{{$cli->telefone}}</td>
                                                                                        <td>{{$cli->lat}}</td>
                                                                                        <td>{{$cli->log}}</td>
                                                                                        <td>{{$cli->user}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--contagem-->
                    <div role="tabpanel" class="tab-pane active" id="contagem">
                        <div class="container">
                            <div class="row"style="background: white">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#recontagem" aria-controls="recontagem"  role="tab" data-toggle="tab">Recontagem do livro Registro</a></li>
                                        <li role="presentation"><a href="#bincards" aria-controls="bincards" role="tab" data-toggle="tab">Conatgem de Bincard</a></li>
                                        <li role="presentation"><a href="#csenhas" aria-controls="csenhas" role="tab" data-toggle="tab">Contagem de Senhas Físicas</a></li>
                                        <li role="presentation"><a href="#cfisicas" aria-controls="cfisicas" role="tab" data-toggle="tab">Contagem Física</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
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

                                        <!--Lista de bincard -->
                                        <div role="tabpanel" class="tab-pane" id="bincards">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">BINCARD</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="bincard" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>PRODUTO</th>
                                                                                <th>CODIGO</th>
                                                                                <th>UNIDADE</th>
                                                                                <th>SALDO INICIAL</th>
                                                                                <th>ENTRADAS</th>
                                                                                <th>SAIDAS</th>
                                                                                <th>VARIANCE</th>
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

                                                                            @if(isset($bincard))
                                                                                @foreach($bincard as $cli)
                                                                                    <tr>

                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->produto}}</td>
                                                                                        <td>{{$cli->codigo}}</td>
                                                                                        <td>{{$cli->unidade}}</td>
                                                                                        <td>{{$cli->saldo_inicial}}</td>
                                                                                        <td>{{$cli->entradas}}</td>
                                                                                        <td>{{$cli->saidas}}</td>
                                                                                        <td>{{$cli->stock_balance}}</td>
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
                                                                            @endif
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

                                        <!--contagem fisica -->
                                        <div role="tabpanel" class="tab-pane" id="cfisicas">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">CONTAGEM FÍSICAS</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="cfisica" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>PRODUTO</th>
                                                                                <th>CODIGO</th>
                                                                                <th>UNIDADE</th>
                                                                                <th>SALDO INICIAL</th>
                                                                                <th>CONTAGEM FISICA</th>
                                                                                <th>VARIANCE</th>
                                                                                <th>COMENTARIO</th>
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

                                                                            @if(isset($contagens))
                                                                                @foreach($contagens as $cli)
                                                                                    <tr>

                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->produto}}</td>
                                                                                        <td>{{$cli->codigo}}</td>
                                                                                        <td>{{$cli->unidade}}</td>
                                                                                        <td>{{$cli->saldo}}</td>
                                                                                        <td>{{$cli->contagem_fisica}}</td>
                                                                                        <td>{{$cli->variance}}</td>
                                                                                        <td>{{$cli->comentario}}</td>
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
                                                                            @endif
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

                                        <!--contagem de senhas -->
                                        <div role="tabpanel" class="tab-pane" id="csenhas">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">CONTAGEM DE SENHAS FÍSICAS</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="senhas" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>NOME FRANQUIA</th>
                                                                                <th>SENHAS FÍSICAS NA FTM</th>
                                                                                <th>SENHAS FÍSICAS NO MVC</th>
                                                                                <th>VARIANCIA</th>
                                                                                <th>ID FRANQUIA</th>
                                                                                <th>PROVINCIA</th>
                                                                                <th>DISTRITO</th>
                                                                                <th>BAIRRO</th>
                                                                                <th>TIPO FRANQUIA</th>
                                                                                <th>MODELO FRANQUIA</th>
                                                                                <th>NOME ENFERMEIRA</th>
                                                                                <th>TELEFONE</th>
                                                                                <th>LAT</th>
                                                                                <th>LOG</th>
                                                                                <th>USUARIO</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @if(isset($senhas))
                                                                                @foreach($senhas as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->franquia}}</td>
                                                                                        <td>{{$cli->ffisica}}</td>
                                                                                        <td>{{$cli->mfisica}}</td>
                                                                                        <td>{{$cli->variance}}</td>
                                                                                        <td>{{$cli->franquia_id}}</td>
                                                                                        <td>{{$cli->province}}</td>
                                                                                        <td>{{$cli->districts}}</td>
                                                                                        <td>{{$cli->bairro}}</td>
                                                                                        <td>{{$cli->tipo}}</td>
                                                                                        <td>{{$cli->modelo}}</td>
                                                                                        <td>{{$cli->enfermeira}}</td>
                                                                                        <td>{{$cli->telefone}}</td>
                                                                                        <td>{{$cli->lat}}</td>
                                                                                        <td>{{$cli->log}}</td>
                                                                                        <td>{{$cli->user}}</td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--upload-->
                    <div role="tabpanel" class="tab-pane" id="upload">
                        <div class="container">
                            <div class="row"style="background: white">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#salesforces" aria-controls="salesforces" role="tab" data-toggle="tab">Salesforce</a></li>
                                        <li role="presentation"><a href="#dhis2" aria-controls="dhis2" role="tab" data-toggle="tab">DHIS2</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">

                                        <!--SalesForce-->
                                        <div role="tabpanel" class="tab-pane active" id="salesforces">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">SALESFORCE</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="salesforce" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>

                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>PRODUTO</th>
                                                                                <th>CODIGO</th>
                                                                                <th>UNIDADE</th>
                                                                                <th>SALDO INICIAL</th>
                                                                                <th>ENTRADAS</th>
                                                                                <th>SAIDAS</th>
                                                                                <th>VARIANCE</th>
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

                                                                            @if(isset($salesforce))
                                                                                @foreach($salesforce as $cli)
                                                                                    <tr>

                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->produto}}</td>
                                                                                        <td>{{$cli->codigo}}</td>
                                                                                        <td>{{$cli->unidade}}</td>
                                                                                        <td>{{$cli->saldo_inicial}}</td>
                                                                                        <td>{{$cli->entradas}}</td>
                                                                                        <td>{{$cli->saidas}}</td>
                                                                                        <td>{{$cli->stock_balance}}</td>
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
                                                                            @endif
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--and Lista de Franquia-->

                                        </div>

                                        <!--dhis2 -->
                                        <div role="tabpanel" class="tab-pane" id="dhis2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">DHIS2</h5>
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                                                        <table class="table display nowrap "  id="udhis2" cellspacing="0" style="width: 100%">

                                                                            <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>DATA DQA</th>
                                                                                <th>DATA INICIO DQA</th>
                                                                                <th>DATA FIM DQA</th>
                                                                                <th>FRANQUIA</th>
                                                                                <th>ATIVIDADE</th>
                                                                                <th>FAIXA ETARIA</th>
                                                                                <th>TOTAL</th>
                                                                                <th>USUARIO</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                            @if(isset($dhis2))
                                                                                @foreach($dhis2 as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->id}}</td>
                                                                                        <td>{{$cli->data_dqa}}</td>
                                                                                        <td>{{$cli->data_inicio}}</td>
                                                                                        <td>{{$cli->data_fim}}</td>
                                                                                        <td>{{$cli->franquia}}</td>
                                                                                        <td>{{$cli->atividade}}</td>
                                                                                        <td>{{$cli->idade}}</td>
                                                                                        <td>{{$cli->total}}</td>
                                                                                        <td>{{$cli->user}}</td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--parametrizacao-->
                    <div role="tabpanel" class="tab-pane" id="parametrizacao">
                        <div class="container">
                            <div class="row"style="background: white">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Produtos</a></li>
                                        <li role="presentation"><a href="#franquias" aria-controls="franquias" role="tab" data-toggle="tab">Franquias</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!--Lista de produtos -->
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="col-md-12">

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
                                                                            @if(isset($produtos))
                                                                                @foreach($produtos as $cli)
                                                                                    <tr>
                                                                                        <td>{{$cli->nome}}</td>
                                                                                        <td>{{$cli->descricao}}</td>
                                                                                        <td>{{$cli->unidade}}</td>
                                                                                        <td>{{$cli->codigo}}</td>

                                                                                    </tr>
                                                                                @endforeach
                                                                            @endif
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



                                        <!--Lista de franquias -->
                                        <div role="tabpanel" class="tab-pane" id="franquias">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="white-box">
                                                        <div class="card">
                                                            <h5 class="card-header">lISTA DE FRANQUIAS</h5>
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
                                                                            <th>Telefone</th>
                                                                            <th>Observações</th>
                                                                            <th>Lat</th>
                                                                            <th>log</th>

                                                                            </thead>
                                                                            <tbody>
                                                                            @if(isset($franquias))
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
                                                                            @endif
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
            $('#produto').DataTable( {
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
            $('#parametrizacao_p').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );
        } );
    </script>    <script>
        $(document).ready(function() {
            $('#franquia').DataTable( {
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
            $('#udhis2').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );
        } );

        $(document).ready(function() {
            $('#questionario_rdqa').DataTable( {
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

    <script>
        $(document).ready(function() {
            $('#cfisica').DataTable( {
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
            $('#bincard').DataTable( {
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
            $('#questionario_stock').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );


        } );
        $(document).ready(function() {
            $('#questionario_recontagem').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );


        } );
        $(document).ready(function() {
            $('#questionario_verificacao').DataTable( {
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
            $('#senhas').DataTable( {
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
            $('#salesforce').DataTable( {
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