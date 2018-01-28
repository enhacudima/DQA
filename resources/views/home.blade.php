@extends('admin.layout.layout')

@section('content')
<div class="container">
    <!-- Page Content -->

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
    </div>
    <!-- row -->

    <!--row -->
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <h4 class="box-title">Lista de Produtos</h4>

                <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                    <table class="table display nowrap "  id="example" cellspacing="0" style="width: 100%">
                        <thead>
                        <th>Franquia</th>
                        <th>Descrição</th>
                        <th>Unidade</th>
                        <th>Codigo</th>
                         </thead>
                        <tbody>
                        @foreach($controle as $cli)
                            <tr>
                                <td>{{$cli->nome}}</td>
                                <td>{{$cli->descricao}}</td>
                                <td>{{$cli->unidade}}</td>
                                <td>{{$cli->codigo}}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollY": 200,
            "scrollX": true,
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ]
        } );

        $('#sal_inicial').DataTable( {
            "scrollY": 200,
            "scrollX": true,
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
@endsection
