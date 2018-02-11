
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
                <h4 class="page-title">Recontagem Senhas</h4> </div>
        </div>
        <!-- /.row -->

        <form class="form-horizontal form-material" id="senhasnafranquia" method="POST" action="{{ route('bincard.store')}}">
        {{ csrf_field() }}
        <!--User ID-->
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            @include('admin.cabecalho')

            <div class="form-group">
                <table  class="table table-bordered table-hover table-sortable col-md-12">
                    <thead>
                    <tr>
                        <th>Senhas Fisicas confirmadas</th>
                        <th>Senhas Fisicas Ativadas no Movecardo</th>
                    </tr>
                    </thead>

                    <tbody id="corpo-pro">
                    <td>
                        <input id="ffisica" name="ffisica" type="number" placeholder="0"  class="form-control tableInput" >
                        </td>
                    <td>
                        <input id="" name="" type="number" placeholder="0"  class="form-control tableInput" >
                    </td>
                    </tr>

                    </tbody>
                </table>
                <div class="form-group">
                    <div class="form-group col-md-6">

                                <button class="btn btn-success pull-right" id="save_nafranquia">Gravar</button>

                    </div>

                    <div colspan="form-group col-md-6">
                                <button class="btn btn-success pull-right" id="save_contagem">Gravar</button>

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

                    var ffisica= $(ffisica).val();


                    var params = {
                        data: cabecalho,
                        ffisica: ffisica};


                    if(ffisica){
                        $.ajax({
                            type: "get",
                            url: '{{url('/save/senhas')}}',
                            data: params,
                            success: function (data) {
                                $('#alert').removeClass('hidden');
                                $('#alert').removeClass('danger');
                                $('#alert').addClass('success');
                                $('#alert').html('Dados salvos com sucesso!');
                                alert('salvo');

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
                fillFiels();
            }else{
                $('.tableInput').prop("disabled", true);
            }
        });

        function fillFiels(){
            $('.tableInput').val('');

            var cabecalho = getFormObj('cabec');

            if(cabecalho.franquia_id && cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim){
                $('.tableInput').prop("disabled", false);
                $.ajax({
                    type: "get",
                    url: '{{url('/getAll/senhas')}}',
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




@endsection()