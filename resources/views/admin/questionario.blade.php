
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
            margin-right: 20px;
            white-space: pre-wrap;
        }
      
    </style>
<div class="col-md-10 col-md-offset-1">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Questionario Stock</h4> </div>
    </div>
    <!-- /.row -->


    <div class="col-xs-12">
        <div class="white-box">

            <form class="form-horizontal form-material" method="POST" action="{{ route('contagem.store')}}">
                {{ csrf_field() }}
                <div class="nr-campos">

                    <!--User ID-->
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="form-group">
                        <label class="col-md-12">Franquia</label>
                        <div class="col-md-4">
                            <select name="franquia_id" id="franquia_id" class="form-control form-control-line">
                                <option value="">Seleciona a Franquia...</option>
                                @if(isset($franquias))
                                    @foreach($franquias as $franquia)
                                        <option value="{{$franquia->id}}">{{$franquia->nome}}</option>
                                    @endforeach
                                @endif

                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Mês</label>
                        <div class="col-md-3">
                            <input type="month" name="mes" class="form-control form-control-line">
                        </div>
                    </div>
                </div>

                <div class="nr-campos" >
                        <h3 class="col-md-12">Perguntas</h3>

                     <div class="col-md-12 form-control form-control-line" >
                         <label >Será que a Franquia está a usar o Bin card padrão?</label>

                            <input name="radioGroup" id="radio1" value="1" type="radio"> Sim
                            <input name="radioGroup" id="radio2" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label >Será que as franquias  tem a documentação dos kits que passam pela Promotora? </label>

                         <input name="radioGroup" id="radio3" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio4" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label>Para franquia publica, todos produtos que entraram na franquia foram declarados?</label>

                         <input name="radioGroup" id="radio5" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio6" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label>Se os produtos de PF tiverem sido transferidos para outra clínica, será que existe documentação que prova isso? </label>

                         <input name="radioGroup" id="radio7" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio8" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label>Em conclusão, será que o número de kits usados por cartão de estoque, está geralmente adicionado ao número relatado( por exemplo, mais ou menos de 10%) ?</label>

                         <input name="radioGroup" id="radio9" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio10" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label>Caso não, será que eles têm  um motivo plausível?</label>

                         <input name="radioGroup" id="radio11" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio12" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label>Faz a distincão dos produtos por proveniencia (MISAU, PSI)?</label>

                         <input name="radioGroup" id="radio13" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio14" value="0" checked="" type="radio"> Não

                     </div>

                    <div class="col-md-12 form-control form-control-line" >
                         <label >Será que eles têm documentação pelos motivos?</label>

                         <input name="radioGroup" id="radio15" value="1" type="radio"> Sim
                         <input name="radioGroup" id="radio16" value="0" checked="" type="radio"> Não

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