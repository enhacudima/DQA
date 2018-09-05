@extends('admin.layout.layout')
@section('content')

    <style>

        .nr-campos {
            background: #f8fbf8;
            margin-bottom: 20px;
            padding: 15px;
        }

        .page-title {
            color: #30a5ff;
            margin-left: 10px;

        }

        label {
            font-weight: 100;
            margin-right: 20px;
            white-space: pre-wrap;
        }

        .card-title {
            font-size: 14px;
            font-weight: 600;
        }

        .white-box {
            background: #fff;
            border-radius: 5px;
        }

        .card-header {
            font-weight: 600;
            font-size: 16px;
            background: #f8f8f8;
            padding: 15px 20px;
            border: 1px solid #e0e0e1;
            border-radius: 5px 5px 0 0;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
        }

        .card-body {
            margin: 20px;
        }

        .form-inline .form-group {
            margin-right: 10px;
        }

        .well-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(66, 139, 202);
            border-color: rgb(53, 126, 189);

        }

        .glyphicon {
            margin-right: 5px;
        }


    </style>
    <div class="col-md-10 col-md-offset-1">
        <div class="row bg-title">
            <div class="col-xs-12">
                <h4 class="page-title">Abortion MVA Checklist</h4></div>
        </div>
        <!-- /.row -->

        <div class="col-md-12">
            @include('admin.cabecalhoQuestionario')
            <div id="alert" class="alert alert-success text-center hidden"></div>
        </div>

        <div class="col-xs-12">
            <form class="form-horizontal form-material" id="main_form" onsubmit="return false;">
                {{ csrf_field() }}

                <input type="hidden" id="codigo" name="codigo" value="{{$codigo+1}}">
                <input type="hidden" id="categoria" name="categoria" value="Abortion Counselling checklist">

                <!--1. Saudação Geral-->
                <div class="white-box">
                    <div class="card">

                            <h5 class="card-header">1. Saudação Geral</h5>
                        <div class="card-body">
                            @if(isset($abortionCounsellingchecklist))
                                @foreach($abortionCounsellingchecklist as $q)
                                @if($q->codigo == "sg")
                                        <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                       value="Sim" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"
                                                       style="color: #8ad919;">Sim</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                       value="Não" class="tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"
                                                       style="color: #f6941e;">Não</label>
                                            </div>
                                            <hr>
                                        @endif
                                    </div>

                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!--1. 2. Realiza o aconselhamento para serviços compreensivos do aborto - aconselhamento individual ou em grupo, conforme apropriado-->
                <div class="white-box">
                    <div class="card">

                        <h5 class="card-header">2. Realiza o aconselhamento para serviços compreensivos do aborto - aconselhamento individual ou em grupo, conforme apropriado</h5>
                        <div class="card-body">
                            @if(isset($abortionCounsellingchecklist))
                                @foreach($abortionCounsellingchecklist as $q)
                                    @if($q->codigo == "rapsca")
                                        <div class="col">
                                            @if($q->tipo_input=='radio')
                                                <h5 class="card-title">{{$q->questao}}</h5>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                           value="Sim" class="custom-control-input tableInput">
                                                    <label class="custom-control-label" for="{{'id-1-'.$q->id}}"
                                                           style="color: #8ad919;">Sim</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                           value="Não" class="tableInput">
                                                    <label class="custom-control-label" for="{{'id-2-'.$q->id}}"
                                                           style="color: #f6941e;">Não</label>
                                                </div>
                                                <hr>
                                            @endif
                                        </div>

                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>


                <!--3. Realiza o aconselhamento para planeamento familiar pós-aborto compreensivo-->
                <div class="white-box">
                    <div class="card">

                        <h5 class="card-header">3. Realiza o aconselhamento para planeamento familiar pós-aborto compreensivo</h5>
                        <div class="card-body">
                            @if(isset($abortionCounsellingchecklist))
                                @foreach($abortionCounsellingchecklist as $q)
                                    @if($q->codigo == "rappfpc")
                                        <div class="col">
                                            @if($q->tipo_input=='radio')
                                                <h5 class="card-title">{{$q->questao}}</h5>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                           value="Sim" class="custom-control-input tableInput">
                                                    <label class="custom-control-label" for="{{'id-1-'.$q->id}}"
                                                           style="color: #8ad919;">Sim</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo."-".$q->id}}"
                                                           value="Não" class="tableInput">
                                                    <label class="custom-control-label" for="{{'id-2-'.$q->id}}"
                                                           style="color: #f6941e;">Não</label>
                                                </div>
                                                <hr>
                                            @endif
                                        </div>

                                    @endif
                                @endforeach
                            @endif

                                <div class="form-group">
                                    <div class="col-sm-12" >
                                        <br>
                                        <button class="btn btn-success pull-right tableInput" id="save_contagem" style="margin-bottom: 50px">Gravar</button>
                                    </div>
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
            $('.tableInput').prop("disabled", true);
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            }
        });


        /*********************************************/

        $('#save_contagem').click(function () {
            //alert('Dados salvos com sucesso!');

            $('.alert').removeClass('hidden');
            $('.alert').removeClass('danger');
            $('.alert').addClass('success');
            $('.alert').html('Dados salvos com sucesso!');

            setTimeout("$('.alert').hide();", 3000);


            $('.tableInput').prop('checked', false);

            var valAtual = parseFloat($('#codigo').val());
            $('#codigo').val(valAtual + 1);
            console.log(valAtual + 1);
        });

        //pega todos os dados do formulário e retorna um array onde o indice é o nome do input
        function getFormObj(formId) {
            var formObj = {};
            var inputs = $('#' + formId).serializeArray();
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

            if (cabecalho.franquia_id && cabecalho.data_avaliacao) {

                $.ajax({
                    type: "get",
                    url: '{{url('/save/abortion-MVA')}}',
                    data: {
                        cabecalho: cabecalho,
                        questao: questao,
                        resposta: resposta,
                        codigo: codigo,
                        categoria: categoria
                    },
                    success: function (data) {

                        console.log(data);
                        console.log(('Dados salvos com sucesso!'));
                    },

                    error: function (data) {
                        /*
                                                $('#alert').removeClass('hidden');
                                                $('#alert').removeClass('success');
                                                $('#alert').addClass('danger');
                                                $('#alert').html('Erro ao gravar!');
                        */
                        console.log(data);
                    }
                });
            } else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        });


        /***************************end*****************/

        $('.index').change(function () {
            var cabecalho = getFormObj('cabec');

            if (cabecalho.franquia_id && cabecalho.data_avaliacao) {
                $('.tableInput').prop("disabled", false);
                $('#add').prop("disabled", false);
            } else {
                $('.tableInput').prop("disabled", true);
                $('#add').prop("disabled", true);
            }
        });

    </script>



@endsection()