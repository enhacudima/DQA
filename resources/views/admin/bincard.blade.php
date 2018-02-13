
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
                <h4 class="page-title">Bin Card de Produtos</h4> </div>
        </div>
        <!-- /.row -->

        <div class="row">
            @include('admin.cabecalho')
            <div id="alert" hidden class="alert alert-success text-center">
                Dados salvos com sucesso!
            </div>
        </div>

                <form class="form-horizontal form-material" id="main_form" onsubmit="return false;">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <table  class="table table-bordered table-hover table-sortable col-md-12">
                            <thead>



                            <tr id="tHeader2">
                                <th>Produto</th>
                                <th>Saldo inicial</th>
                                <th>Entradas </th>
                                <th>Saidas </th>
                                <th>Stock balance</th>
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
                            <td colspan="7">
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

    </div>

    <script>
        function Calctotal(saldo, entrad, said, balance){

            var saldo_inicial = 0;
            var entrada = 0;
            var saida = 0;

            if($('#'+saldo).val())
                saldo_inicial = parseInt($('#'+saldo).val());

            if($('#'+entrad).val())
                entrada = parseInt($('#'+entrad).val());

            if($('#'+said).val())
                saida = parseInt($('#'+said).val());

            $('#'+balance).val(saldo_inicial+entrada-saida);
            //console.log('saldo '+saldo_inicial+' entrada '+entrada+' saida '+saida);
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
                    var saldo_inicial = $('#saldo_inicial'+i).val();
                    var entradas_bin_card = $('#entradas_bin_card'+i).val();
                    var saidas = $('#saidas'+i).val();
                    var stock_balance = $('#stock_balance'+i).val();
                    var comentario = $('#comentario'+i).val();

                    var params = {
                        data: cabecalho,
                        produtos_id: produto_id,
                        saldo_inicial: saldo_inicial,
                        entradas_bin_card: entradas_bin_card,
                        saidas: saidas,
                        stock_balance: stock_balance,
                        comentario: comentario
                    };

                    console.log(params);

                    if(entradas_bin_card && saidas && produto_id){
                        $.ajax({
                            type: "get",
                            url: '{{url('/save/bin-card')}}',
                            data: params,
                            success: function (data) {

                                $('.alert').show();
                                setTimeout( "$('.alert').hide();", 3000);

                                console.log(data);

                                $('.tableInput').val("");
                                $("input[name='stock_balance[]']").val('');
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
                    url: '{{url('/getAll/bin-card')}}',
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
            var total = parseInt($('#add_v').val());
            var i=totalInput++;
            var distribuicao = '<tr>'+
                '<td>'+
                '<select id="produto_id'+ i + '" name="produto_id[]" class="form-control nprodutos tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');" onchange="Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                '<option value="">Carregar Lista Produto...</option>'+
                    @if(isset($produtos))
                            @foreach($produtos as $produto)
                        '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                    @endforeach
                            @endif

                        '</select>'+
                '</td>'+
                '<td>'+
                '<input id="saldo_inicial' + i + '" name="saldo_inicial[]" type="number" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                '</td>'+
                '<td>'+
                '<input id="entradas' + i + '" name="entradas[]" type="number" placeholder="0"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                '</td>'+
                '<td>'+
                '<input id="saidas' + i + '" name="saidas[]" type="number" placeholder="0"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                '</td>'+
                '<td>'+
                '<input id="stock_balance' + i + '" name="stock_balance[]" disabled type="number" placeholder="0"  class="form-control" >'+
                '</td>'+
                '<td>'+
                '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total tableInput" >'+
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
                    '<select id="produto_id'+ i + '" name="produto_id[]" class="form-control nprodutos tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');" onchange="Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                    '<option value="">Carregar Lista Produto...</option>'+

                        @if(isset($produtos))
                                @foreach($produtos as $produto)
                            '<option value="{{$produto->id}}">{{$produto->codigo}} - {{$produto->nome}}</option>'+
                        @endforeach
                                @endif
                            '</select>'+
                    '</td>'+
                    '<td>'+
                    '<input id="saldo_inicial' + i + '" name="saldo_inicial[]" type="number" placeholder="0"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                    '</td>'+
                    '<td>'+
                    '<input id="entradas_bin_card' + i + '" name="entradas_bin_card[]" type="number" placeholder="0"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                    '</td>'+
                    '<td>'+
                    '<input id="saidas' + i + '" name="saidas[]"  type="number" placeholder="0"  class="form-control tableInput" oninput=" Calctotal(\'saldo_inicial' + i + '\', \'entradas_bin_card' + i + '\', \'saidas' + i + '\', \'stock_balance' + i + '\');">'+
                    '</td>'+
                    '<td>'+
                    '<input id="stock_balance' + i + '" name="stock_balance[]" disabled type="number" placeholder="0"  class="form-control" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control tableInput" >'+
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