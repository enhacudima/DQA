<div class="#">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                    <div class="card-header">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Cabeçalho</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Número da transação" required />
                                    </div>

                                    <div class="form-group">
                                        <select name="franquia_id" id="franquia_id" class="form-control form-control-line">
                                            <option value="">Seleciona a Franquia...</option>
                                            @if(isset($franquias))
                                                @foreach($franquias as $franquia)
                                                    <option value="{{$franquia->id}}">{{$franquia->nome}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input id="nTransacao" name="nTransacao" type="number" placeholder="Número da transação" class="form-control">
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


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>