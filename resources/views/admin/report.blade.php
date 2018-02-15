


@extends('admin.layout.layout')


@section('content')






<div class="col-md-12 col-md-offset-0">

    <!--Lista de produtos -->
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

    <hr>
    <!--Lista de usuarios -->
    <div class="row">
         <div class="col-md-12">
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
    <!--and Lista de usuarios -->

    <hr>

    <!--Lvro de registro -->
    <div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="card">
                <h5 class="card-header">Recontagem do Livro de Registro</h5>
                <div class="panel-body">
                    <div class="row">
                        <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                            <table class="table display nowrap "  id="p" cellspacing="0" style="width: 100%">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DATA DQA</th>
                                    <th>DATA INICIO DQA</th>
                                    <th>DATA FIM DQA</th>
                                    <th>NÚMERO DA PAGINA</th>
                                    <th>TOTAL</th>
                                    <th>ATIVIDADE</th>
                                    <th>TIPO ATIVIDADE</th>
                                    <th>FAIXA ETARIA</th>
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

                                @if(isset($recontagems))
                                    @foreach($recontagems as $cli)
                                        <tr>
                                            <td>{{$cli->id}}</td>
                                            <td>{{$cli->data_dqa}}</td>
                                            <td>{{$cli->data_inicio}}</td>
                                            <td>{{$cli->data_fim}}</td>
                                            <td>{{$cli->nr_pagina}}</td>
                                            <td>{{$cli->total}}</td>
                                            <td>{{$cli->atividade}}</td>
                                            <td>{{$cli->tipo_atividade}}</td>
                                            <td>{{$cli->faixa_etaria}}</td>
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
    <!--and livro de registro -->

        <hr>
    <!--contagem fisica -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Contagem Fisica</h5>
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
    <!--and contagem fisica -->
        <hr>
    <!--salesforce -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Salesforce</h5>
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
                                        <th>SAIDAS</th>
                                        <th>ENTRADAS</th>
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
                                                <td>{{$cli->saidas}}</td>
                                                <td>{{$cli->entradas}}</td>
                                                <td>{{$cli->stock_balance}}</td>
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
    <!--and salesforce -->
        <hr>
    <!--bincard -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Bincard</h5>
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
                                        <th>SAIDAS</th>
                                        <th>ENTRADAS</th>
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
                                                <td>{{$cli->saidas}}</td>
                                                <td>{{$cli->entradas}}</td>
                                                <td>{{$cli->stock_balance}}</td>
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
    <!--and bincard -->

    <hr>
    <!--Questionario Verificacao -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">QUESTIONARIO DE VERIFICAÇÃO DE INSTRUÇÕES</h5>
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
    <!--and Questionario Verificacao -->

         <hr>
    <!--Questionario Stock -->
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

                                    @if(isset($questionario_stock))
                                        @foreach($questionario_stock as $cli)
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
    <!--and Questionario Stock -->
         <hr>
    <!--Questionario Recontagem -->
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
    <!--and Questionario Recontagem -->
    <hr>

    <!--confirmação das senhas  -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">CONFIRMAÇÃO DAS SENHAS</h5>
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
                                        <th>SENHAS FISICAS NA FRANQUIA</th>
                                        <th>SENHAS FISICAS CONFIRMADAS NO MOVERCARDO</th>
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

                                      @if(isset($senhas))
                                        @foreach($senhas as $cli)

                                            <tr>
                                                <td>{{$cli->id}}</td>
                                                <td>{{$cli->data_dqa}}</td>
                                                <td>{{$cli->data_inicio}}</td>
                                                <td>{{$cli->data_fim}}</td>
                                                <td>{{$cli->ffisica}}</td>
                                                <td>{{$cli->mfisica}}</td>
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
    <!--and Questionario Stock -->

        <hr>
        <hr>




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

    <script>
    $(document).ready(function() {
        $('#p').DataTable( {
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
        $('#cfisica').DataTable( {
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
        $('#salesforce').DataTable( {
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
        $('#bincard').DataTable( {
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
            $('#questionario_stock').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );


        } );
        $(document).ready(function() {
            $('#questionario_recontagem').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );


        } );
        $(document).ready(function() {
            $('#questionario_verificacao').DataTable( {
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
        $('#senhas').DataTable( {
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