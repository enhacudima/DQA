
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
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Salesforce de Produtos</h4> </div>
        </div>
        <!-- /.row -->


        <div class="col-xs-12">
            <div class="white-box">

                <form class="form-horizontal form-material" method="POST" action="{{ route('salesforce.store')}}">
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

                </form>
            </div>
        </div>

    </div>



@endsection()