
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

    </style>
    <div class="col-md-10 col-md-offset-1">
        <div class="row bg-title">
            <div class="col-lg-5">
                <h4 class="page-title">Recontagem do Livro de Registro</h4> </div>
        </div>
        <!-- /.row -->


        <div class="col-xs-12">
            <div class="white-box">

                <form class="form-horizontal form-material" method="POST" action="{{ route('recontagem.store')}}">
                    {{ csrf_field() }}
                    <div id="nr-campos">

                        <!--User ID-->
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                            </span >Cabeçalho</a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Número da transação" required />
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="franquia_id" id="franquia_id" class="form-control form-control-line">
                                                                    <option value="">Seleciona a Franquia...</option>
                                                                    @if(isset($franquias))
                                                                        @foreach($franquias as $franquia)
                                                                            <option value="{{$franquia->id}}">{{$franquia->nome}}</option>
                                                                        @endforeach
                                                                    @endif

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <input id="nTransacao" name="nTransacao" type="number" placeholder="Número da transação" class="form-control">
                                                            </div>

                                                        </div>


                                                        <div class="col-md-6">
                                                            <!-- data_dqa -->
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="dataDQA">Data do DQA</label>
                                                                <div class="col-md-9">
                                                                    <input id="dataDQA" name="dataDQA" type="date" placeholder="Data do DQA" class="form-control ">

                                                                </div>

                                                            </div>



                                                            <!-- Data do Início do Período sob Avaliação -->
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="dataInicio">Início </label>
                                                                <div class="col-md-9">
                                                                    <input id="dataInicio" name="dataInicio" type="date" placeholder="Data do Início do Período sob Avaliação" class="form-control ">
                                                                </div>
                                                            </div>

                                                            <!-- Fim do Período sob Avaliação-->
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label" for="dataFim">Fim </label>
                                                                <div class="col-md-9">
                                                                    <input id="dataFim" name="dataFim" type="date" placeholder="Fim do Período sob Avaliação" class="form-control">
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="well well-sm well-primary">
                                                                <form class="form form-inline " role="form"></form>
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

                    <div class="form-group">
                    <!--htlm-->
                        <div class="panel panel-default" id="contTabela">
                            <div>

                                <div class="panel-heading"><svg class="glyph stroked desktop"><use xlink:href="#stroked-desktop"></use></svg>Recontagem Livro de registo</div>
                                <div class="panel-body">

                                    <form class="form-horizontal" onsubmit="adicionarCampos(); return false;">
                                        <table>
                                            <tr>
                                                <td width="215"><input style="border: 1px solid #31708f" id="add_fields" name="add_fields" type="number" class="form-control" placeholder="Número máximo de páginas" value="+add"></td>
                                                <td><input id="add_btn" name="add-btn" type="button" class="btn btn-info btn-md pull-right" value="+add" onclick="adicionarCampos(); return false"></td>
                                            </tr>
                                        </table>
                                    </form>

                                    <form class="form-horizontal" id="header_recontagem" action="" method="post">
                                        <input id="headerID" type="hidden">
                                        <fieldset>
                                            <table  class="table table-bordered table-hover table-sortable">
                                                <thead>
                                                <tr id="tHeader1">
                                                    <th colspan="6">Registos por pagina</th>
                                                </tr>
                                                <tr id="tHeader2">
                                                    <th>Indicador</th>
                                                    <th>Desagregacao1</th>
                                                    <th>Desagregacao2</th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr id="trDistribuicao"></tr>

                                                <!--********Novas PF******************************************************-->
                                                <tr id="novasPfPilulaXIX"></tr>
                                                <tr id="novasPfPilulaXXIV"></tr>
                                                <tr id="novasPfPilulaXXV"></tr>

                                                <tr id="novasPfInjectaveisXIX"></tr>
                                                <tr id="novasPfInjectaveisXXIV"></tr>
                                                <tr id="novasPfInjectaveisXXV"></tr>

                                                <tr id="novasPfImplanteXIX"></tr>
                                                <tr id="novasPfImplanteXXIV"></tr>
                                                <tr id="novasPfImplanteXXV"></tr>

                                                <tr id="novasPfDiuXIX"></tr>
                                                <tr id="novasPfDiuXXIV"></tr>
                                                <tr id="novasPfDiuXXV"></tr>

                                                <tr id="novasPfNa"></tr>
                                                <tr id="novasPfTotal"></tr>

                                                <!--*****Continuadoras de PF*********************************************************-->
                                                <tr id="continuadoraPfPilulaXIX"></tr>
                                                <tr id="continuadoraPfPilulaXXIV"></tr>
                                                <tr id="continuadoraPfPilulaXXV"></tr>

                                                <tr id="continuadoraPfInjectaveisXIX"></tr>
                                                <tr id="continuadoraPfInjectaveisXXIV"></tr>
                                                <tr id="continuadoraPfInjectaveisXXV"></tr>

                                                <tr id="continuadoraPfImplanteXIX"></tr>
                                                <tr id="continuadoraPfImplanteXXIV"></tr>
                                                <tr id="continuadoraPfImplanteXXV"></tr>

                                                <tr id="continuadoraPfDiuXIX"></tr>
                                                <tr id="continuadoraPfDiuXXIV"></tr>
                                                <tr id="continuadoraPfDiuXXV"></tr>

                                                <tr id="continuadoraPfNa"></tr>
                                                <tr id="continuadoraPfTotal"></tr>

                                                <!--********Pílula******************************************************-->
                                                <tr id="pilulaNovasXIX"></tr>
                                                <tr id="pilulaNovasXXIV"></tr>
                                                <tr id="pilulaNovasXXV"></tr>

                                                <tr id="pilulaContinuamXIX"></tr>
                                                <tr id="pilulaContinuamXXIV"></tr>
                                                <tr id="pilulaContinuamXXV"></tr>

                                                <tr id="pilulaTotalCiclosXIX"></tr>
                                                <tr id="pilulaTotalCiclosXXIV"></tr>
                                                <tr id="pilulaTotalCiclosXXV"></tr>

                                                <tr id="pilulaNa"> </tr>
                                                <tr id="pilulaTotal"></tr>

                                                <!--**************************************************************-->
                                                <tr id="InjectaveisNovasXIX"></tr>
                                                <tr id="InjectaveisNovasXXIV"></tr>
                                                <tr id="InjectaveisNovasXXV"></tr>

                                                <tr id="InjectaveisContinuamXIX"></tr>
                                                <tr id="InjectaveisContinuamXXIV"></tr>
                                                <tr id="InjectaveisContinuamXXV"></tr>

                                                <tr id="InjectaveisTotalCiclosXIX"></tr>
                                                <tr id="InjectaveisTotalCiclosXXIV"></tr>
                                                <tr id="InjectaveisTotalCiclosXXV"></tr>

                                                <tr id="InjectaveisNa"> </tr>
                                                <tr id="InjectaveisTotal"></tr>

                                                <!--**************************************************************-->
                                                <tr id="ImplantesNovasXIX"></tr>
                                                <tr id="ImplantesNovasXXIV"></tr>
                                                <tr id="ImplantesNovasXXV"></tr>

                                                <tr id="ImplantesContinuamXIX"></tr>
                                                <tr id="ImplantesContinuamXXIV"></tr>
                                                <tr id="ImplantesContinuamXXV"></tr>

                                                <tr id="ImplantesTotalCiclosXIX"></tr>
                                                <tr id="ImplantesTotalCiclosXXIV"></tr>
                                                <tr id="ImplantesTotalCiclosXXV"></tr>

                                                <tr id="ImplantesNa"> </tr>
                                                <tr id="ImplantesTotal"></tr>

                                                <!--**************************************************************-->
                                                <tr id="DIUNovasXIX"></tr>
                                                <tr id="DIUNovasXXIV"></tr>
                                                <tr id="DIUNovasXXV"></tr>

                                                <tr id="DIUContinuamXIX"></tr>
                                                <tr id="DIUContinuamXXIV"></tr>
                                                <tr id="DIUContinuamXXV"></tr>

                                                <tr id="DIUTotalCiclosXIX"></tr>
                                                <tr id="DIUTotalCiclosXXIV"></tr>
                                                <tr id="DIUTotalCiclosXXV"></tr>

                                                <tr id="DIUNa"> </tr>
                                                <tr id="DIUTotal"></tr>


                                                </tbody>
                                            </table>
                                        </fieldset>
                                    </form>

                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-12 widget-left">
                                            <button name="submit" type="submit" class="btn btn-success btn-md pull-left" onclick="confirmarTransacao();">Gravar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success pull-right">Gravar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>



@endsection()