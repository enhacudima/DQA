
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


            <form class="form-horizontal form-material" method="POST" action="{{ route('contagem.store')}}">
                {{ csrf_field() }}

                    <!--User ID-->
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @include('admin.cabecalho')



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