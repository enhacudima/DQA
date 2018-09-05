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

                    <form id="cabec" onsubmit="return false;">

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label" for="transacao">Número da transação</label>
                                                <select name="franquia_id" id="franquia_id" class="form-control form-control-line index">
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
                                                <input id="data_DQA" name="data_DQA" type="date" placeholder="Data do DQA" class="form-control index">
                                            </div>
                                        </div>

                                        <!-- Data do Início do Período sob Avaliação -->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="data_inicio">Início </label>
                                            <div class="col-md-8">
                                                <input id="data_inicio" name="data_inicio" type="date" placeholder="Data do Início do Período sob Avaliação" class="form-control index">
                                            </div>
                                        </div>

                                        <!-- Fim do Período sob Avaliação-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="data_Fim">Fim </label>
                                            <div class="col-md-8">
                                                <input id="data_Fim" name="data_Fim" type="date" placeholder="Fim do Período sob Avaliação" class="form-control index">
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

