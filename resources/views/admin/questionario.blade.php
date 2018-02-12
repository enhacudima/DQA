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
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Questionario Stock</h4> </div>
    </div>
    <!-- /.row -->

    <div>
        @include('admin.cabecalho')
        <div id="alert" class="alert alert-success text-center hidden"></div>
    </div>

    <div class="col-xs-12">
            <form class="form-horizontal form-material" id="main_form" onsubmit="return false;">
                <div id="alert" class="alert alert-success text-center hidden"></div>
                {{ csrf_field() }}

                    <!--QUESTIONARIO-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Perguntas</h5>
                        <div class="card-body">
                            @if(isset($questoes))
                                @foreach($questoes as $q)
                                    <div class="col">
                                        <h5 class="card-title">{{$q->questao}}</h5>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Sim" class="custom-control-input tableInput">
                                            <label class="custom-control-label" for="{{'id-1-'.$q->id}}">Sim</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Não" class="custom-control-input tableInput">
                                            <label class="custom-control-label" for="{{'id-2-'.$q->id}}">Não</label>
                                        </div>
                                        <hr>
                                    </div>
                                @endforeach
                            @endif


                            <div class="form-group">
                                <div class="col-sm-12" >
                                    <br>
                                    <button class="btn btn-success pull-right" id="save_contagem" style="margin-bottom: 50px">Gravar</button>
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
                    alert('Salvo com sucesso!');
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
        $(document).ready(function () {
            createForm(totalInput);
        });

        $(document).on('click','button.remove', function () {
            $(this).closest('tr').remove();
            return false;
        });





        $('input').click(function () {
            $('.alert').hide();
        });
    </script>



@endsection()