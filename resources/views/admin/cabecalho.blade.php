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
                    <form onsubmit="return false;">
                        {{ csrf_field() }}
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
                                            <label class="col-md-3 control-label" for="dataDQA">Data do DQA</label>
                                            <div class="col-md-8">
                                                <input id="dataDQA" name="dataDQA" type="date" placeholder="Data do DQA" class="form-control ">
                                            </div>
                                        </div>

                                        <!-- Data do Início do Período sob Avaliação -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="dataInicio">Início </label>
                                            <div class="col-md-8">
                                                <input id="dataInicio" name="dataInicio" type="date" placeholder="Data do Início do Período sob Avaliação" class="form-control ">
                                            </div>
                                        </div>

                                        <!-- Fim do Período sob Avaliação-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="dataFim">Fim </label>
                                            <div class="col-md-8">
                                                <input id="dataFim" name="dataFim" type="date" placeholder="Fim do Período sob Avaliação" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="col-md-12 widget-left">
                                                <button name="submit" id="saveHeader" type="submit" class="btn btn-success btn-md pull-center col-md-3 col" >Gravar</button>
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

    $('#saveHeader').click(function () {
        //alert('ok');
        //var pais = $('#saveHeader').val();
        $.ajax({
            type:"POST",
            url: '{{url('save-cabecalho')}}',
            data: {pais: 'ok'},
            success: function (data) {
               /* var html = '<option value="">Selecione a Província</option>';
                for(var i = 0; i < data.length; i++){
                    html += '<option value="'+ data[i].name +'">'+data[i].name+'</option>';
                }
                $('#provincia').html(html).show();
                */
                console.log(data);

            }
        })
    });
 </script>