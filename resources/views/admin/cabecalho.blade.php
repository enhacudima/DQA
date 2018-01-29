<?php
 $franquias = \App\Franquia::all();
?>

<div class="#">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="card-header">
                        <h4 class="panel-title">
                            <i class="fa fa-info-circle" aria-hidden="true"></i></i> Adicionar Cabeçalho
                        </h4>
                    </div>
                            </a>

                    <div class="alert alert-success hidden text-center"></div>

                    <form onsubmit="return false;" id="cab">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="col-md-12 control-label" for="transacao">Número da transação</label>
                                            <div class="col-md-12">
                                                <input name="transacao" id="transacao" type="text" class="form-control" placeholder="KH3-12" required />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="col-md-12 control-label" for="transacao">Número da transação</label>
                                            <div class="col-md-12">
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

                                    </div>


                                    <div class="col-md-6">
                                        <!-- data_dqa -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="data_DQA">Data do DQA</label>
                                            <div class="col-md-8">
                                                <input id="data_DQA" name="data_DQA" type="date" placeholder="Data do DQA" class="form-control ">
                                            </div>
                                        </div>

                                        <!-- Data do Início do Período sob Avaliação -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="data_inicio">Início </label>
                                            <div class="col-md-8">
                                                <input id="data_inicio" name="data_inicio" type="date" placeholder="Data do Início do Período sob Avaliação" class="form-control ">
                                            </div>
                                        </div>

                                        <!-- Fim do Período sob Avaliação-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="data_Fim">Fim </label>
                                            <div class="col-md-8">
                                                <input id="data_Fim" name="data_Fim" type="date" placeholder="Fim do Período sob Avaliação" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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

    $('#saveHeader').click(function () {
        var formData = getFormObj('cab');

        //console.log(formData);

        $.ajax({
            type:"get",
            url: '{{url('save-cabecalho')}}',
            data: {data: formData},
            success: function (data) {
                $('.alert').removeClass('hidden');
                $('.alert').html('Cabeçalho adicionado com sucesso!');
                $('input').addClass('disablad');
                $('select').val('');
                console.log(data);

            }
        })
    });

    $('input').click(function () {
        $('.alert').addClass('hidden');
    })
 </script>