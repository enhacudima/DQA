
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
                <h4 class="page-title">Questionário Resumo</h4> </div>
        </div>
        <!-- /.row -->

        <div>
            @include('admin.cabecalho')
            <div id="alert" class="alert alert-success text-center hidden"></div>
        </div>

                <form class="form-horizontal form-material" method="POST" action="{{ route('bincard.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <table  class="table table-bordered table-hover table-sortable col-md-12">
                            <thead>


                            <tr><th colspan="3"> Verifique MCs relatados ao DHIS para ver se há dupla contagem com as áreas próximas</th></tr>
                            <tr id="tHeader2">
                                <th>Nome da área próxima que não deve relatar no DHIS2</th>
                                <th>Depois de verificar MOH DHIS2, sera que nao ha servicos adicionais por reportar?</th>
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


                        <!--QUESTIONARIO-->
                        <div class="white-box">
                            <div class="card">
                                <h5 class="card-header">Perguntas</h5>
                                <div class="card-body">
                                    @if(isset($questoes))
                                        @foreach($questoes as $q)
                                            @if($q->tipo_input=='textarea')
                                                <div class="col">
                                                    <h5 class="card-title">{{$q->questao}}</h5>
                                                        <div class="">
                                                            <textarea rows="5" placeholder="... " id="{{$q->codigo.$q->id}}" name="{{$q->codigo}}" class="form-control textarea tableInput"></textarea>
                                                        </div>
                                                    <hr>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-sm-12" >
                                <br>
                                <button class="btn btn-success pull-right" id="save_contagem" style="margin-bottom: 50px">Gravar</button>
                            </div>
                        </div>

                </form>
            </div>
        </div>

    </div>

    <script>
        @if(isset($questoes))
            @foreach($questoes as $q)
                @if($q->tipo_input=='in-table')
                @endif
            @endforeach
        @endif
    </script>

    <script>

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

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){

                @if(isset($questoes))
                @foreach($questoes as $q)
                /*
                 var tipoQuestionario = '{$q->codigo}}'.slice(0, '{$q->codigo}}'.indexOf("-"));
                 alert(res);

                 if()
                 */

                var resposta = ($('input[name="{{$q->codigo}}"]:checked').val());
                var questao = ($('input[name="{{$q->codigo}}"]:checked').attr("name"));

                $.ajax({
                    type: "get",
                    url: '{{url('/save/questionario-stock')}}',
                    data: {cabecalho:cabecalho, resposta:resposta, questao:questao},
                    success: function (data) {
                        $('.alert').removeClass('hidden');
                        $('.alert').removeClass('danger');
                        $('.alert').addClass('success');
                        $('.alert').html('Dados salvos com sucesso!');
                        alert('salvo');

                        console.log(data);

                        $("input[type='radio']").val(0);
                    },

                    error: function (data) {

                        $('#alert').removeClass('hidden');
                        $('#alert').removeClass('success');
                        $('#alert').addClass('danger');
                        $('#alert').html('Erro ao gravar!');

                        console.log(data);
                    }
                });
                @endforeach
                @endif
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



        $('#add').click(function () {
            var total = parseInt($('#add_v').val());
            var distribuicao = '<tr>'+
                '<td>'+
                '<input id="resumo-1[]' + i + '" name="resumo-1[]" type="text" placeholder="FTM Exemplo..."  class="form-control untqd tableInput" >'+
                '</td>'+
                '<td>'+
                '<input id="resumo-2[]' + i + '" name="resumo-2[]" type="text" placeholder="ex: comentário" class="form-control total tableInput" >'+
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
                            '<input id="resumo-1' + i + '" name="resumo-1[]" type="text" placeholder="FTM Exemplo..."  class="form-control untqd tableInput" >'+
                            '</td>'+
                            '<td>'+
                            '<input id="resumo-2' + i + '" name="resumo-2[]" type="text" placeholder="ex: comentário" class="form-control total tableInput" >'+
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