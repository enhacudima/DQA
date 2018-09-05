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
        <div class="col-xs-12">
            <h4 class="page-title">Questionario verficação de instrumentos</h4> </div>
    </div>
    <!-- /.row -->

    <div class="col-md-12">
        @include('admin.cabecalho')
        <div id="alert" class="alert alert-success text-center hidden"></div>
    </div>

    <div class="col-xs-12">
            <form class="form-horizontal form-material" id="main_form" onsubmit="return false;">
                {{ csrf_field() }}

                <input type="hidden" id="codigo" name="codigo" value="{{$codigo+1}}">
                <input type="hidden" id="categoria" name="categoria" value="rdqa">

                    <!--structure-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">I - M&E Structure, Functions and Capabilities</h5>
                        <div class="card-body">
                            @if(isset($structure))
                                @foreach($structure as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-5-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                        <hr>
                                         @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!--indicator-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">II- Indicator Definitions and Reporting Guidelines</h5>
                        <div class="card-body">
                            @if(isset($indicator))
                                @foreach($indicator as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-5-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                            <hr>
                                        @endif
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>

                <!--datacollection-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">III - Data-collection and Reporting Forms and Tools</h5>
                        <div class="card-body">
                            @if(isset($structure))
                                @foreach($structure as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-5-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                            <hr>
                                        @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!--datamanagement-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">IV- Data Management Processes</h5>
                        <div class="card-body">
                            @if(isset($datamanagement))
                                @foreach($datamanagement as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-4-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                            <hr>
                                        @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!--linkswith-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">Links with National Reporting System</h5>
                        <div class="card-body">
                            @if(isset($linkswith))
                                @foreach($linkswith as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-5-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                            <hr>
                                        @endif
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!--useofdata-->
                <div class="white-box">
                    <div class="card">
                        <h5 class="card-header">VI - Use of data for decision making</h5>
                        <div class="card-body">
                            @if(isset($useofdata))
                                @foreach($useofdata as $q)
                                    <div class="col">
                                        @if($q->tipo_input=='radio')
                                            <h5 class="card-title">{{$q->questao}}</h5>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-1-'.$q->id}}" name="{{$q->codigo}}" value="Yes - completely" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-1-'.$q->id}}"  style="color: #8ad919;">Yes - completely</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-2-'.$q->id}}" name="{{$q->codigo}}" value="Partly" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-2-'.$q->id}}"  style="color: #f6941e;">Partly</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-3-'.$q->id}}" name="{{$q->codigo}}" value="No - not at all" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-3-'.$q->id}}"  style="color: Red;">No - not at all  </label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="{{'id-4-'.$q->id}}" name="{{$q->codigo}}" value="N/A" class="custom-control-input tableInput">
                                                <label class="custom-control-label" for="{{'id-4-'.$q->id}}"  >N/A</label>
                                            </div>
                                            <div class="custom-control  custom-radio">
                                                <input type="text" id="{{'id-5-'.$q->id.'q'}}" name="{{$q->codigo.'q'}}" style="border: 1px solid #bbbbbb;" class="form-control tableInput" placeholder="Comment...">
                                            </div>
                                            <hr>
                                        @endif
                                    </div>
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
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });


        /*********************************************/

         $('#save_contagem').click(function () {
            //alert('Dados salvos com sucesso!');

             $('.alert').removeClass('hidden');
             $('.alert').removeClass('danger');
             $('.alert').addClass('success');
             $('.alert').html('Dados salvos com sucesso!');

             setTimeout( "$('.alert').hide();", 3000);


            $('.tableInput').prop('checked', false);

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
                    url: '{{url('/save/questionariodeverficacao')}}',
                    data: {cabecalho:cabecalho, questao:questao, resposta:resposta, codigo:codigo, categoria:categoria},
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
            }else alert('Erro.:\n\n Verifique se todos campos do cabeçalho foram preenchidos!');
        });



         /***************************end*****************/

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



@endsection()