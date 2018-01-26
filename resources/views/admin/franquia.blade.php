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

        <!-- /.row -->

        <div class="col-xs-12">
            <form class="form-horizontal form-material" method="POST" action="{{ route('contagem.store')}}">
            {{ csrf_field() }}

            <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">




            <!--QUESTIONARIO-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Formulario de Cadastro</h5>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-6">


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="provincia_id" id="provincia_id" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Provincia...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="distrito_id" id="distrito_id" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Distrito...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="bairro" type="text" class="form-control" placeholder=" Bairro da Franquia " />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="tipo" id="topo" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Tipo...</option>
                                                <option value="">Pública</option>
                                                <option value="">Privada</option>
                                                <option value="">Farmacia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="modelo" id="modelo" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Modelo...</option>
                                                <option value="">Móvel</option>
                                                <option value="">Escola</option>
                                                <option value="">Fixa</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-md-6">


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="nome" type="text" class="form-control" placeholder=" Nome da Clínica Tem mas+ " />
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="telefone" type="number" class="form-control" placeholder=" Numero de Telefone da Clínica  " />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="enfermeira" type="text" class="form-control" placeholder=" Nome da Enfermeira   " />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="observacoes" type="text" class="form-control" placeholder=" Observação   " />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input name="lat" type="number" class="form-control" placeholder=" Latitude   " />
                                        </div>
                                        <div class="col-md-6">
                                            <input name="log" type="number" class="form-control" placeholder=" Longetude   " />
                                        </div>
                                    </div>



                                </div>



                            </div>
                        </div>

                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <br>
                        <button class="btn btn-success pull-right">Gravar</button>
                    </div>
                </div>



            </form>


        </div>
    </div>

    </div>

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





        $('input').click(function () {
            $('.alert').hide();
        });
    </script>



@endsection()