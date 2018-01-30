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

    <div class="col-xs-12">
            <form class="form-horizontal form-material" method="POST" action="{{ route('questionario.store')}}">
                {{ csrf_field() }}

                    <!--User ID-->
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @include('admin.cabecalho')



                    <!--QUESTIONARIO-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Perguntas</h5>
                        <div class="card-body">
                            <div class="col">
                                <h5 class="card-title">Será que a Franquia está a usar o Bin card padrão?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Será que as franquias  tem a documentação dos kits que passam pela Promotora?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Para franquia publica, todos produtos que entraram na franquia foram declarados?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Se os produtos de PF tiverem sido transferidos para outra clínica, será que existe documentação que prova isso?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio4" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Em conclusão, será que o número de kits usados por cartão de estoque, está geralmente adicionado ao número relatado( por exemplo, mais ou menos de 10%)?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio5" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Caso não, será que eles têm  um motivo plausível?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio6" name="customRadio6" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio6" name="customRadio6" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Faz a distincão dos produtos por proveniencia (MISAU, PSI)?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio7" name="customRadio7" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio7" name="customRadio7" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Será que eles têm documentação pelos motivos?</h5>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio8" name="customRadio8" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Sim</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio8" name="customRadio8" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Não</label>
                                </div>
                                <hr>
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