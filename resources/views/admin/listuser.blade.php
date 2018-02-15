


@extends('admin.layout.layout')


@section('content')






<div class="col-md-12 col-md-offset-0 " style="margin: auto">

    <!--Graficos-->
    <div class="row">
        <div class="col-md-4">
            {!! $chart->render() !!}
        </div>

        <div class="col-md-4">
            {!! $user->render() !!}
        </div>

    </div>
    <!--and graficos-->

    <!--Lista de usuarios -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="card">
                    <h5 class="card-header">Lista de Uruarios</h5>
                    <div class="panel-body">
                        <div class="row">
                            <div id="morris-area-chart2" style="height: 370px; overflow: scroll;">
                                <table class="table display nowrap "  id="user" cellspacing="0" style="width: 100%">

                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Grupo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($users))
                                            @foreach($users as $cli)
                                                <tr>
                                                    <td>{{$cli->name}}</td>
                                                    <td>{{$cli->email}}</td>
                                                    @if( $cli->grupo == 2)
                                                        <td>Admin</td>
                                                    @else
                                                        <td>Normal</td>
                                                    @endif

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>

    </div>
    <!--and lista de usuarios -->

        <hr>


</div>

{!! \ConsoleTVs\Charts\Facades\Charts::scripts() !!}
{!! $chart->script() !!}


    <script>
        $(document).ready(function() {
            $('#user').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print','colvis'
                ]
            } );


        } );
    </script>



@endsection()