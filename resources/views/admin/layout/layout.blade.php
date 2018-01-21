
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

    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <!--ACTUALIZACAO DO BOOTSTRAP-->
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
    <style>
        .mega-dropdown {
            margin-right: 20px;
            position: static !important;
        }
        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }
        .mega-dropdown-menu > li > ul {
            padding: 0;
            margin: 0;
        }
        .mega-dropdown-menu > li > ul > li {
            list-style: none;
        }
        .mega-dropdown-menu > li > ul > li > a {
            display: block;
            color: #222;
            padding: 3px 5px;
        }
        .mega-dropdown-menu > li ul > li > a:hover,
        .mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
        }
        .mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #30a5ff;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }
        .white-box{
            background: #fff;
        }

    </style>
</head>
<boby>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Comutar Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="../recontagem/painel.php">EVIDÊNCIAS <span> PSI MOZ</span></a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a id="utilizadorLog" href="user.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Adicionar Utilizador</a>
                        </li>
                        <li id="updateU"><a href="../recontagem/userUpdate.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"></use></svg> Mudar Password</a>
                        </li>
                        <li><a href="../recontagem/"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sair</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown mega-dropdown pull-right img-circle" id="menu_principal">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Menu principal"><svg class="glyph stroked desktop"><use xlink:href="#stroked-desktop"></use></svg>Menu</a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-1">
                            <ul>
                                <li class="dropdown-header">Dashboard</li>

                            </ul>
                            <hr>
    </li>
    <li class="col-sm-2">
        <ul>
            <li class="dropdown-header">Resumo geral</li>
            <hr>
        </ul>
    </li>
    <li class="col-sm-2">
        <ul>
            <li class="dropdown-header">Quetionario Resumo</li>
            <hr>
        </ul>
    </li>



    <li class="col-sm-2">
        <ul>
            <li class="dropdown-header">Recontagem stock</li>
            <hr>
            <li><a href="{{route('entrada.index')}}">Entradas</a></li>
            <li><a href="{{route('saida.index')}}">Saidas</a></li>
            <li><a href="{{route('contagem.index')}}">Contagem Fisica</a></li>

        </ul>
    </li>
    <li class="col-sm-2">
        <ul>
            <li class="dropdown-header">Questionario Stock</li>
            <hr>
            <li><a href="{{route('questionario.index')}}">Questionario</a></li>
        </ul>
    </li>

     <li class="col-sm-2">
        <ul>
            <li class="dropdown-header">Recontagem</li>
            <hr>
        </ul>
    </li>
     <li class="col-sm-1">
        <ul>
            <li class="dropdown-header">Usuarios</li>
            <hr>
        </ul>
    </li>



    </ul>

    </li>

    </ul>
    </div>

    </div>
    <!-- /.container-fluid -->
    </nav>

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

