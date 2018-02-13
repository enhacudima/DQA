
@extends('admin.layout.layout')
@section('content')

    <style>

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

    </style>
    <div class="col-md-10 col-md-offset-1">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Recontagem Senhas</h4> </div>
        </div>
        <!-- /.row -->
        <div>
            @include('admin.cabecalho')
            <div id="alert" hidden class="alert alert-success text-center">
                Dados salvos com sucesso!
            </div>
        </div>

        <form class="form-horizontal form-material" id="senhasnafranquia" method="POST" onsubmit="return false;">
<div class="white-box">
        {{ csrf_field() }}
        <!--User ID-->
            <div class="form-group" style="padding: 20px">
                    <div class="col-md-6">
                        <label for="ffisica">Senhas Fisicas confirmadas</label>
                        <input id="ffisica" name="ffisica" type="number" placeholder="0"  class="form-control tableInput" >


                        </div>
                    <div class="col-md-6">
                        <label for="mfisica">Senhas Fisicas Ativadas no Movecardo</label>
                        <input id="mfisica" name="mfisica" type="number" placeholder="0"  class="form-control tableInput" >
                    <br>
                                <button class="btn btn-success pull-right" id="save_nafranquia">Gravar</button>
                    </div>

            </div>
</div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('.tableInput').prop("disabled", true);;
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        //pega todos os dados do formulário e retorna um array onde o indice é o nome do input
        function getFormObj(form) {
            var formObj = {};
            var inputs = $("form").serializeArray();
            $.each(inputs, function (i, input) {
                formObj[input.name] = input.value;
            });
            return formObj;
                    }

        $('#save_nafranquia').click(function () {
            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){

                    var ffisica= $("#ffisica").val();
                    var mfisica=$("#mfisica").val();


                    var params = {
                        data: cabecalho,
                        ffisica: ffisica,
                        mfisica:mfisica

                    };
                     console.log(params);

                    if(ffisica || mfisica){
                        $.ajax({
                            type: "get",
                            url: '{{url('/save/senhas')}}',
                            data: params,
                            success: function (data) {

                                $('.alert').show();
                                setTimeout( "$('.alert').hide();", 3000);

                                console.log(data);

                                $('.tableInput').val("");
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

            }else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        });


        $('.index').change(function () {
            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim) {
                $('.tableInput').prop("disabled", false);
            }else{
                $('.tableInput').prop("disabled", true);
            }
        });



    </script>




@endsection()