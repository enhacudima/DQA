
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

    <div>
        @include('admin.cabecalho')
        <div id="alert" class="alert alert-success text-center hidden"></div>
    </div>

            <form class="form-horizontal form-material" id="main_form" onsubmit="return false;">
                {{ csrf_field() }}



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
                                <button class="btn btn-info center-block" disabled id="add"><b>+</b> add</button>
                            </th>
                        </tr>
                        </thead>

                        <tbody id="corpo-pro">

                        <tr id="trDistribuicao">

                        </tr>

                        </tbody>
                        <tfoot>
                            <td colspan="6">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success pull-right" id="save_contagem">Gravar</button>
                                    </div>
                                </div>
                            </td>
                        </tfoot>
                    </table>
                </div>

            </form>
    </div>


    <script>
        function Calctotal(unit, qd, tot){
            var qtd = parseInt($('#'+qd).val());
            var untqd = parseInt($('#'+unit).val());
            $('#'+tot).val(qtd * untqd);
        }

        $(document).ready(function () {
            createForm(totalInput);
            $('.tableInput').prop("disabled", true);
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        //pega todos os dados do formulário e retorna um array onde o indice é o nome do input
        function getFormObj(formId) {
            var formObj = {};
            var inputs = $('#'+formId).serializeArray();
            $.each(inputs, function (i, input) {
                formObj[input.name] = input.value;
            });
            return formObj;
        }

        $('#save_contagem').click(function () {
            var cabecalho = getFormObj('cabec');
            var totalLinhas = $('#main_form tr').length;

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){


                totalLinhas-=2;

                for(i=1; i<=totalInput; i++) {
                    var produto_id = $('#produto_id'+i).val();
                    var saldo = $('#saldo'+i).val();
                    var contagem_fisica = $('#contagem_fisica'+i).val();
                    var variance = $('#variance'+i).val();
                    var comentario = $('#comentario'+i).val();

                    var params = {
                        data: cabecalho,
                        produto_id: produto_id,
                        saldo: saldo,
                        contagem_fisica: contagem_fisica,
                        variance: variance,
                        comentario: comentario
                    };

                console.log(params);

                    if(contagem_fisica && produto_id){
                        $.ajax({
                            type: "get",
                            url: '{{url('/save/contagem-fisica')}}',
                            data: params,
                            success: function (data) {
                                $('#alert').removeClass('hidden');
                                $('#alert').removeClass('danger');
                                $('#alert').addClass('success');
                                $('#alert').html('Dados salvos com sucesso!');
                                alert('salvo');

                                console.log(data);

                                $('.tableInput').val("");
                                $("input[name='saldo[]']").val("");
                                $("input[name='variance[]']").val("");
                            },

                            error: function (data) {
                                $('#alert').removeClass('hidden');
                                $('#alert').removeClass('success');
                                $('#alert').addClass('danger');
                                $('#alert').html('Erro ao gravar!');
                                console.log(data);
                            }
                        });
                    }
                }
            }else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        });


        $('.index').change(function () {
            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim) {
                $('.tableInput').prop("disabled", false);
                $('#add').prop("disabled", false);
                fillFiels();
            }else{
                $('.tableInput').prop("disabled", true);
                $('#add').prop("disabled", true);
            }
        });

        function fillFiels(){
            $('.tableInput').val('');

            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){
                $('.tableInput').prop("disabled", false);
                $.ajax({
                    type: "get",
                    url: '{{url('/getAll/contagem-fisica')}}',
                    data: {data: cabecalho},
                    success: function (data) {
                        console.log(data);
                        for(i=0; i<data.length; i++){
                            $('#'+data[i].codigo).val(data[i].total);
                            // $('#'+data[i].codigo).css("background-color", "#c5e1a5");
                        }
                    },

                    error: function (data) {
                        console.log(data);
                    }
                })
            }else $('.tableInput').prop("disabled", true);
        }


    </script>


    <script>
        var totalInput=8;

        $(document).on('click','button.remove', function () {
            $(this).closest('tr').remove();
            return false;
        });



        $('#add').click(function () {
            totalInput++;
            var total = parseInt($('#add_v').val());
            var distribuicao = '<tr>'+
                '<td>'+
                '<select id="produtos_id'+ totalInput + '" name="produtos_id[]" class="form-control nprodutos tableInput" oninput="Calctotal(\'saldo' + totalInput + '\', \'contagem_fisica' + totalInput + '\', \'variance' + totalInput + '\');" onchange="Calctotal(\'saldo' + totalInput + '\', \'contagem_fisica' + totalInput + '\', \'variance' + totalInput + '\');">'+
                '<option value="">Carregar Lista Produto...</option>'+
                    @if(isset($produtos))
                        @foreach($produtos as $produto)
                            '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                        @endforeach
                    @endif

                        '</select>'+

                '<td>'+
                '<input id="saldo' + totalInput + '" name="saldo[]" disabled type="number" placeholder="0" value="1" class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="contagem_fisica' + totalInput + '" name="contagem_fisica[]" type="number" placeholder="0"  class="form-control untqd tableInput" oninput="Calctotal(\'saldo' + totalInput + '\', \'contagem_fisica' + totalInput + '\', \'variance' + totalInput + '\');">'+
                '</td>'+
                '<td>'+
                '<input id="variance' + totalInput + '" name="variance[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="comentario' + totalInput + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total tableInput" >'+
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
                    '<select id="produto_id'+ i + '" name="produto_id[]" class="form-control nprodutos tableInput disabled" oninput="Calctotal(\'saldo' + i + '\', \'contagem_fisica' + i + '\', \'variance' + i + '\');" onchange="Calctotal(\'saldo' + i + '\', \'contagem_fisica' + i + '\', \'variance' + i + '\');">'+
                    '<option value="">Carregar Lista Produto...</option>'+

                        @if(isset($produtos))
                            @foreach($produtos as $produto)
                                '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                            @endforeach
                        @endif
                            '</select>'+

                    '<td>'+
                    '<input id="saldo' + i + '" name="saldo[]" disabled value="1" type="number" placeholder="0"  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="contagem_fisica' + i + '" name="contagem_fisica[]" type="number" placeholder="0"  class="form-control untqd tableInput" oninput="Calctotal(\'saldo' + i + '\', \'contagem_fisica' + i + '\', \'variance' + i + '\');">'+
                    '</td>'+
                    '<td>'+
                    '<input id="variance' + i + '" name="variance[]" disabled type="number" placeholder="0"  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total tableInput" >'+
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