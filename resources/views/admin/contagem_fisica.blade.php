
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
            <h4 class="page-title">Contagem Fisica de Produtos</h4> </div>
    </div>

    <div class="col-xs-12">
        <div class="white-box">

            <form class="form-horizontal form-material" method="POST" action="{{ route('contagem.store')}}">
                {{ csrf_field() }}
                <div id="nr-campos">

                    <!--User ID-->
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="card-header">
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
                    <table  class="table table-bordered table-hover table-sortable col-md-12">
                        <thead>



                        <tr id="tHeader2">
                            <th>Produto</th>
                            <th>Saldo</th>
                            <th>Contagem Fisica</th>
                            <th>Variance Resumo semanal & SF</th>
                            <th>Comentario</th>
                            <th>
                                <button class="btn btn-info center-block" id="add"><b>+</b> add</button>
                            </th>
                        </tr>
                        </thead>

                        <tbody id="corpo-pro">

                        <tr id="trDistribuicao">

                        </tr>

                        </tbody>
                    </table>
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
    <script>
        var totalInput=5;
        $(document).ready(function () {
            createForm(totalInput);
        });

        $(document).on('click','button.remove', function () {
            $(this).closest('tr').remove();
            return false;
        });



        $('#add').click(function () {
            var total = parseInt($('#add_v').val());
            var distribuicao = '<tr>'+
                '<td>'+
                '<select id="produto_id'+ i + '" name="produto_id[]" class="form-control nprodutos" oninput=" Calctotal(\'untqd' + i + '\', \'qd' + i + '\', \'total' + i + '\');" onchange="fillUnidade(\'nprodutos'+ i + '\', \'untqd' + i + '\');  Calctotal(\'untqd' + i + '\', \'qd' + i + '\', \'total' + i + '\');">'+
                '<option value="">Carregar Lista Produto...</option>'+
                    @if(isset($produtos))
                        @foreach($produtos as $produto)
                            '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                        @endforeach
                    @endif

                        '</select>'+

                '<td>'+
                '<input id="saldo' + i + '" name="saldo[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="contagem_fisica' + i + '" name="contagem_fisica[]" type="number" placeholder="0"  class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="variance' + i + '" name="variance[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total" >'+
                '</td>'+
                '<td>'+
                '<button class="btn btn-danger remove center-block" id="add" onclick="return false;"><b>X</b></button>'+
                '</td>'+
                '</tr>';
            $('#corpo-pro').append(distribuicao);
            return false;
        });
        // Cria os campos para input
        function createForm(totalPaginas) {
            var distribuicao='';
            var totalInput = totalPaginas;

            for (i = 1; i <= totalInput; i++) {
                distribuicao += '<tr>'+
                    '<td>'+
                    '<select id="produto_id'+ i + '" name="produto_id[]" class="form-control nprodutos" oninput=" Calctotal(\'untqd' + i + '\', \'qd' + i + '\', \'total' + i + '\');" onchange="fillUnidade(\'nprodutos'+ i + '\', \'untqd' + i + '\');  Calctotal(\'untqd' + i + '\', \'qd' + i + '\', \'total' + i + '\');">'+
                    '<option value="">Carregar Lista Produto...</option>'+

                        @if(isset($produtos))
                            @foreach($produtos as $produto)
                                '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                            @endforeach
                        @endif
                            '</select>'+

                    '<td>'+
                    '<input id="saldo' + i + '" name="saldo[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="contagem_fisica' + i + '" name="contagem_fisica[]" type="number" placeholder="0"  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="variance' + i + '" name="variance[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total" >'+
                    '</td>'+
                    '<td>'+
                    '<button class="btn btn-danger remove center-block" id="add" onclick="return false;"><b>X</b></button>'+
                    '</td>'+
                    '</tr>';
            }

            $('#corpo-pro').html(distribuicao).show();

        }

        $('input').click(function () {
            $('.alert').hide();
        });
    </script>



@endsection()