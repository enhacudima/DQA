

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
            <form class="form-horizontal form-material" method="POST" action="{{ route('franquias.store')}}">
            {{ csrf_field() }}

            <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">




            <!--QUESTIONARIO-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Formulario de Cadastro de Franquias</h5>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-6">


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="franquia_id" type="text" class="form-control" placeholder=" Id Exterior " required/>
                                            </input>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="province" id="province" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Provincia...</option>

                                                @foreach($province as $province)
                                                    <option value="{{$province->province}}">{{$province->province}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="districts" id="districts" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Distrito...</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="bairro" id="bairro" type="text" class="form-control" placeholder=" Bairro da Franquia " />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="tipo" id="tipo" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Tipo...</option>
                                                <option value="Pública">Pública</option>
                                                <option value="Privada">Privada</option>
                                                <option value="Farmacia">Farmacia</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <select name="modelo" id="modelo" class="form-control form-control-line" required>
                                                <option value="">Seleciona a Modelo...</option>
                                                <option value="Móvel">Móvel</option>
                                                <option value="Escola">Escola</option>
                                                <option value="Fixa">Fixa</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>


                                <div class="col-md-6">


                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input name="nome" type="text" class="form-control" placeholder=" Nome da Clínica Tem mas+ " required/>
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


                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success pull-right">Gravar</button>
                                        </div>
                                    </div>



                                </div>



                            </div>
                        </div>

                </div>





            </form>


        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <br>
            <button class="btn btn-success pull-left">Caregar Ficheiro</button>
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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        $('#province').change(function () {
            var province = $('#province').val();
            $.ajax({
                type:"GET",
                url: '{{url('/get/districts')}}',
                data: {province: province},
                success: function (data) {
                    var html = '<option value="">Selecione o distrito</option>';
                    for(var i = 0; i < data.length; i++){
                        html += '<option value="'+ data[i].district +'">'+data[i].district+'</option>';
                    }
                    $('#districts').html(html).show();
                    console.log(data);

                }
            })
        });


    </script>

@endsection()