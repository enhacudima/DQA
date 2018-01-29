@extends('admin.layout.layout')


@section('content')
    {!! Charts::assets() !!}


    <style>
        body {
            background: #22222226;
        }

    </style>

<div class="container">
    <!-- Page Content -->

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4> </div>
    </div>
    <!-- row -->

    <!--row -->
    <div class="row">
        <div class="col-md-4">
            {!! $chart->render() !!}
        </div>
        <div class="col-md-4">
            {!! $user->render() !!}
        </div>
    </div>


</div>
</div>



@endsection
