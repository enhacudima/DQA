
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSI Moz | DQA</title>


    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet">

    <script src="{{ asset('admin/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery-3.2.0.min.js')}}"></script>

    <!-- Latest compiled and minified CSS -->
    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Icons-->
    <script src="{{ asset('admin/js/lumino.glyphs.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{ asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--ACTUALIZACAO DO BOOTSTRAP-->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->



    <style>

        body{
            background: rgba(137, 153, 168, 0.22);
        }
        .navbar, .dropdown-menu{
            background: rgba(134, 135, 133, 0.99);
            border: none;

        }

        .nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a, .dropdown-menu>li{
            border-bottom: 3px solid transparent;
        }
        .nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
            border-bottom: 3px solid transparent;
            background: none;
        }
        .navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
            color: #fff;
        }
        .dropdown-menu{
            -webkit-box-shadow: none;
            box-shadow:none;
        }

        .nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){
            border-bottom: #C4E17F 3px solid;
        }
        .nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){
            border-bottom: #F7FDCA 3px solid;
        }
        .nav li:hover:nth-child(8n+3), .nav li.active:nth-child(8n+3){
            border-bottom: #FECF71 3px solid;
        }
        .nav li:hover:nth-child(8n+4), .nav li.active:nth-child(8n+4){
            border-bottom: #F0776C 3px solid;
        }
        .nav li:hover:nth-child(8n+5), .nav li.active:nth-child(8n+5){
            border-bottom: #DB9DBE 3px solid;
        }
        .nav li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){
            border-bottom: #C49CDE 3px solid;
        }
        .nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
            border-bottom: #669AE1 3px solid;
        }
        .nav li:hover:nth-child(8n+8), .nav li.active:nth-child(8n+8){
            border-bottom: #62C2E4 3px solid;
        }

        .navbar-toggle .icon-bar{
            color: #fff;
            background: #fff;
        }

    </style>


</head>
<boby>



    <div>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">DQA <span> PSI MOZ</span></a>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="#"><a href="{{route('home')}}" class="">Dashboard</a></li>

                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resum Geral <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </li>

                            <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quetionario <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('questionario.index')}}">Stock</a></li>
                                    <li><a href="{{route('questionario-resumo.index')}}">Resumo</a></li>
                                </ul>
                            </li>
                            <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recontagem stock <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('bincard.index')}}">Bin Card</a></li>
                                    <li><a href="{{route('salesforce.index')}}">Salesforce</a></li>
                                    <li><a href="{{route('contagem.index')}}">Contagem Fisica</a></li>
                                </ul>
                            </li>

                            <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recontagem Livro <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('recontagem.index')}}">Recontagem</a></li>
                                </ul>
                            </li>

                            <li class=" down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parametrizaçao <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('users.index')}}">Adicionar</a></li>
                                    <li><a href="#">Produtos</a></li>
                                    <li><a href="#">Franquias</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i></use></svg> {{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li id="updateU"><a href="../recontagem/userUpdate.php"><i class="fa fa-key" aria-hidden="true"></i> Mudar Password</a>
                                    </li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    </div>

    <div class="conteiner">
        @yield('content')
    </div>




<script src="{{ asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-3.2.0.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-table.js')}}"></script>
<script src="{{ asset('admin/js/moment.min2.js')}}"></script>
<script src="{{ asset('admin/js/daterangepicker.js')}}"></script>
<script src="{{ asset('admin/js/funcoes.js')}}"></script>
<script src="{{ asset('admin/js/myAjax.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<script>

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })

    /******************SIDEBAR********************/

</script>


</boby>
</html>

