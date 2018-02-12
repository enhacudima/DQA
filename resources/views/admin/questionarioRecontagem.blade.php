
@extends('admin.layout.layout')
@section('content')

    <style>
        #nr-campos{
            background: #f8fbf8;
            margin-bottom: 20px;
            padding: 15px;
        }
        .page-title{
            color: #30a5ff;
            margin-left: 10px;

        }


        .form-inline .form-group { margin-right:10px; }
        .well-primary {
            color: rgb(255, 255, 255);
            background-color: rgb(66, 139, 202);
            border-color: rgb(53, 126, 189);

        }
        .glyphicon { margin-right:5px; }

        .textarea{
            border: 1px solid #ccc;
            outline: 0;
            box-shadow: inset 0px 0px 0px 1px #ccc;
        }
    </style>
    <div class="col-md-10 col-md-offset-1">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Questionario Recontegem</h4> </div>
        </div>
        <!-- /.row -->

        <form class="form-horizontal form-material" method="POST" action="{{ route('bincard.store')}}">
        {{ csrf_field() }}
        <!--User ID-->
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            @include('admin.cabecalho')

            <div class="form-group">
                <table  class="table table-bordered table-hover table-sortable col-md-12">
                    <thead>


                    <tr><th colspan="3"> Verifique MCs relatados ao DHIS para ver se há dupla contagem com as áreas próximas</th></tr>
                    <tr id="tHeader2">
                        <th>Nome da área próxima que não deve relatar no DHIS2</th>
                        <th>Depois de verificar MOH DHIS2, sera que nao ha servicos adicionais por reportar?</th>
                        <th>
                            <button class="btn btn-info center-block" id="add"><b>+</b> add</button>
                        </th>
                    </tr>
                    </thead>

                    <tbody id="corpo-pro">

                    <tr id="trDistribuicao">

                    </tr>

                    </tbody>
                </table>
            </div>


            <!--QUESTIONARIO-->
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Perguntas</h5>
                    <div class="card-body">
                        <div class="col">
                            <h5 class="card-title">1) Quais foram as outras causas ou outros motivos principais pelos resultados? (i.e., erros de  inserção de dados,erros aritméticos,armazenamento inconsistente ou impróprio, etc)</h5>
                            <div class="">
                                <textarea rows="5" placeholder="... " class="form-control textarea"></textarea>
                            </div>
                            <hr>
                        </div>
                        <div class="col">
                            <h5 class="card-title">2.) Quais são pelo menos três recomendações para colocá-las no relatório da área a partir dos resultados das discrepancias encontradas?</h5>
                            <div >
                                <textarea rows="5" placeholder="..." class="form-control textarea"></textarea>
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



        $('#add').click(function () {
            var total = parseInt($('#add_v').val());
            var distribuicao = '<tr>'+
                '<td>'+
                '<input id="area_proxima' + i + '" name="area_proxima[]" type="text" placeholder="FTM Exemplo..."  class="form-control untqd" >'+
                '</td>'+
                '<td>'+
                '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total" >'+
                '</td>'+
                '<td>'+
                '<button class="btn btn-danger remove center-block" id="add" onclick="return false;"><b>X</b></button>'+
                '</td>'+
                '</tr>';
            $('#corpo-pro').append(distribuicao);
            return false;
        });
        // Cria os campos para input
        function createForm(totalPaginas) {
            var distribuicao='';
            var totalInput = totalPaginas;

            for (i = 1; i <= totalInput; i++) {
                distribuicao += '<tr>'+
                    '<td>'+
                    '<input id="area_proxima' + i + '" name="area_proxima[]" type="text" placeholder="FTM Exemplo..."  class="form-control untqd" >'+
                    '</td>'+
                    '<td>'+
                    '<input id="comentario' + i + '" name="comentario[]" type="text" placeholder="ex: comentário" class="form-control total" >'+
                    '</td>'+
                    '<td>'+
                    '<button class="btn btn-danger remove center-block" id="add" onclick="return false;"><b>X</b></button>'+
                    '</td>'+
                    '</tr>';
            }

            $('#corpo-pro').html(distribuicao).show();

        }

        $('input').click(function () {
            $('.alert').hide();
        });
    </script>



@endsection()