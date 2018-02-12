

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

        label{font-weight: 600; font-size: 14px}

        #cabecalh{
            background: #f9fbe7;
            position: relative;
            top: -10px;
        }
    </style>
    <div class="col-md-10 col-md-offset-1">

        <div class="col-xs-12">
            <form class="form-horizontal form-material" id="cabec" enctype="multipart/form-data" method="post" action="{{ route('upload-db.store')}}" accept-charset="UTF-8">
            {{ csrf_field() }}


            <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="white-box">
                    <div class="card">

                        @include('admin.mensagens.msg')

                        <h5 class="card-header">Formulario de Caregamento de ficheiro</h5>

                            <div class="col-md-12" id="cabecalh">
                            <!-- data_dqa -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="data_DQA">Data do DQA</label>
                                    <input id="data_DQA" name="data_DQA" type="date" placeholder="Data do DQA" class="form-control index">
                                </div>
                            </div>

                            <!-- Data do Início do Período sob Avaliação -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="data_inicio">Início </label>
                                    <input id="data_inicio" name="data_inicio" type="date" placeholder="Data do Início do Período sob Avaliação" class="form-control index">
                                </div>
                            </div>

                            <!-- Fim do Período sob Avaliação-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="data_Fim">Fim </label>
                                    <input id="data_Fim" name="data_Fim" type="date" placeholder="Fim do Período sob Avaliação" class="form-control index">
                                </div>
                            </div>

                        </div>

                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-6 col-md-offset-3">

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="control-label" for="nome_ficheiro">Nome do ficheiro que deseja carregar</label>
                                            <select name="nome_ficheiro" id="nome_ficheiro" class="form-control form-control-line tableInput" required>
                                                <option value="">Selecione...</option>
                                                <option value="Sales Force">Sales Force</option>
                                                <option value="DHIS2">DHIS2</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="control-label" for="csv_import">Selecione o ficheiro que deseja carregar</label>
                                            <input name="csv_import" id="csv_import" type="file" class="form-control tableInput" required/>
                                            </input>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success pull-right">Gravar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.tableInput').prop("disabled", true);
        });

        $('.index').change(function () {
            var cabecalho = getFormObj('cabec');

            if(cabecalho.data_DQA && cabecalho.data_inicio && cabecalho.data_Fim) {
                $('.tableInput').prop("disabled", false);
                $('#add').prop("disabled", false);
            }else{
                $('.tableInput').prop("disabled", true);
                $('#add').prop("disabled", true);
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
    </script>

@endsection()