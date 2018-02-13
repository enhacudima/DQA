
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

        .textarea{
            border: 1px solid #ccc;
            outline: 0;
            box-shadow: inset 0px 0px 0px 1px #ccc;
        }

    </style>
    <div class="col-md-10 col-md-offset-1">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Questionario Stock parte 2</h4> </div>
        </div>
        <!-- /.row -->
        <div class="row">
            @include('admin.cabecalho')
            <div id="alert" hidden class="alert alert-success text-center">
                Dados salvos com sucesso!
            </div>
        </div>

                <form class="form-horizontal form-material" method="POST" id="mainForm" onsubmit="return false;">


                    {{ csrf_field() }}
                        <!--User ID-->

                        <input type="hidden" id="codigo" name="codigo" value="{{$codigo+1}}">
                        <input type="hidden" id="categoria" name="categoria" value="stock_parte_2">

                    <div class="form-group">
                        <table  class="table table-bordered table-hover table-sortable col-md-12">
                            <thead>


                            <tr><th colspan="3"> Verifique MCs relatados ao DHIS para ver se há dupla contagem com as áreas próximas</th></tr>
                            <tr id="tHeader2">
                                <th>Nome da área próxima que não deve relatar no DHIS2</th>
                                <th>Depois de verificar MOH DHIS2, sera que nao ha servicos adicionais por reportar?</th>
                            </tr>
                            </thead>

                            <tbody id="corpo-pro">
                                <tr>
                                    <td>
                                        <input id="resumo11" name="resumo-1#1" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >
                                    </td>
                                    <td>
                                        <input id="resumo21' + i + '" name="resumo-2#1" type="text" placeholder="ex: comentário" class="form-control tableInput" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="resumo12" name="resumo-1#2" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >
                                    </td>
                                    <td>
                                        <input id="resumo22" name="resumo-2#2" type="text" placeholder="ex: comentário" class="form-control tableInput" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="resumo13" name="resumo-1#3" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >
                                    </td>
                                    <td>
                                        <input id="resumo23" name="resumo-2#3" type="text" placeholder="ex: comentário" class="form-control tableInput" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="resumo14" name="resumo-1#4" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >
                                    </td>
                                    <td>
                                        <input id="resumo24" name="resumo-2#4" type="text" placeholder="ex: comentário" class="form-control tableInput" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input id="resumo15" name="resumo-1#5" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >
                                    </td>
                                    <td>
                                        <input id="resumo25" name="resumo-2#5" type="text" placeholder="ex: comentário" class="form-control tableInput" >
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                        <!--QUESTIONARIO-->
                        <div class="white-box">
                            <div class="card">
                                <h5 class="card-header">Perguntas</h5>
                                <div class="card-body">
                                    <div class="col">
                                        <h5 class="card-title">1) Quais foram as outras causas ou outros motivos principais pelos resultados? (i.e., erros de  inserção de dados,erros aritméticos,armazenamento inconsistente ou impróprio, etc)</h5>
                                            <div class="">
                                                <textarea rows="5" name="resumo-3" placeholder="... " class="form-control textarea tableInput"></textarea>
                                            </div>
                                        <hr>
                                    </div>
                                    <div class="col">
                                        <h5 class="card-title">2.) Quais são pelo menos três recomendações para colocá-las no relatório da área a partir dos resultados das discrepancias encontradas?</h5>
                                        <div >
                                            <textarea rows="5" name="resumo-4" placeholder="..." class="form-control textarea tableInput"></textarea>
                                        </div>
                                        <hr>
                                    </div>

                                        <div class="col" >
                                            <button class="btn btn-success pull-right tableInput" id="save_contagem" style="margin-bottom: 50px">Gravar</button>
                                        </div>
                                </div>
                            </div>

                        </div>
                </form>
            </div>
        </div>

    </div>

    <script>

        $(document).ready(function () {
            //createForm(totalInput);
            $('.tableInput').prop("disabled", true);
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        $('#save_contagem').click(function () {

            $('.alert').show();
            setTimeout( "$('.alert').hide();", 3000);


            $('.tableInput').val('');

            var valAtual = parseFloat($('#codigo').val());
            $('#codigo').val(valAtual+1);
            console.log(valAtual+1);
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

        $('.tableInput').change(function () {
            var cabecalho = getFormObj('cabec');
            var questao = $(this).attr("name");
            var resposta = $(this).val();
            var codigo = $('#codigo').val();
            var categoria = $('#categoria').val();

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){

                $.ajax({
                    type: "get",
                    url: '{{url('/save/questionario-resumo')}}',
                    data: {cabecalho:cabecalho, questao:questao, resposta:resposta, codigo:codigo, categoria:categoria},
                    success: function (data) {
                        $('.alert').removeClass('hidden');
                        $('.alert').removeClass('danger');
                        $('.alert').addClass('success');
                        $('.alert').html('Dados salvos com sucesso!');

                        console.log('Salvo com sucesso!');;
                        console.log(data);
                    },

                    error: function (data) {

                        $('#alert').removeClass('hidden');
                        $('#alert').removeClass('success');
                        $('#alert').addClass('danger');
                        $('#alert').html('Erro ao gravar!');

                        console.log(data);
                    }
                });
//alert('Salvo com sucesso!');
            }else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        });


        $('.index').change(function () {
            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim) {
                $('.tableInput').prop("disabled", false);
                $('#add').prop("disabled", false);
            }else{
                $('.tableInput').prop("disabled", true);
                $('#add').prop("disabled", true);
            }
        });

    </script>


    <script>
        var totalInput=5;

        $(document).on('click','button.remove', function () {
            $(this).closest('tr').remove();
            return false;
        });


        // Cria os campos para input
        function createForm(totalPaginas) {
            var distribuicao='';
            var totalInput = totalPaginas;

            for (i = 1; i <= totalInput; i++) {
                distribuicao += '<tr>'+
                    '<td>'+
                    '<input id="area_proxima' + i + '" name="resumo-1[]" type="text" placeholder="FTM Exemplo..."  class="form-control tableInput" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="comentario' + i + '" name="resumo-2[]" type="text" placeholder="ex: comentário" class="form-control tableInput" >'+
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