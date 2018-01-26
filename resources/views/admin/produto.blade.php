
@extends('admin.layout.layout')
@section('content')

    <style>

        .nr-campos{
            background: #f8fbf8;
            margin-bottom: 20px;
            padding: 15px;
        }
        .page-title{
            color: #30a5ff;
            margin-left: 10px;

        }
        label{
            font-weight: 100;
            margin-right: 20px;
            white-space: pre-wrap;
        }
        .card-title{
            font-size: 14px;
            font-weight: 600;
        }
        .white-box{
            background: #fff;
            border-radius: 5px;
        }
        .card-header{
            font-weight: 600;
            font-size: 16px;
            background: #f8f8f8;
            padding: 15px 20px;
            border: 1px solid #e0e0e1;
            border-radius: 5px 5px 0 0;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
        }
        .card-body{
            margin: 20px;
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

        <!-- /.row -->

        <div class="col-xs-12">
            <form class="form-horizontal form-material" method="POST" action="{{ route('contagem.store')}}">
            {{ csrf_field() }}

            <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            @include('admin.cabecalho')



                <!--QUESTIONARIO-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Registro de Produtos</h5>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-12">



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="dataDQA">Código do produto</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="CONS-PROJECT-000" name="codigo" class="form-control form-control-line"> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="dataInicio">Produto</label>
                                        <div class="col-md-8">
                                            <input type="text" placeholder="Jeito 24 " name="nome" class="form-control form-control-line"> </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="dataFim">Descrição do produto</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="Ex: Esta é uma descrição do produto" name="descricao" class="form-control form-control-line">
                                    </div>
                                </div>



                                </div>



                                </div>



                            </div>
                        </div>

                    </div>





            </form>
        <div class="form-group">
            <div class="col-sm-12">
                <br>
                <button class="btn btn-success pull-right">Gravar</button>
            </div>
        </div>














    <div class="col-md-12">
        <br>
        <div class="panel panel-default">

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sortable">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>&</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produtos as $cli)
                        <tr>
                            <td>{{$cli->codigo}}</td>
                            <td>{{$cli->nome}}</td>
                            <td>{{$cli->descricao}}</td>
                            <td width="50">
                                <a href="" class="actions edit text-warning"><i class="fa fa-pencil" aria-hidden="true"> edit</i></a>
                            </td>
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


@endsection()