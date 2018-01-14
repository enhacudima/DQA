
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSI Moz | DQA</title>


    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Icons-->
    <script src="{{ asset('admin/js/lumino.glyphs.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{ asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->

    <style>
        .navbar-nav>li>.dropdown-menu {
            border-top-left-radius:4px;
            border-top-right-radius:4px;
        }
        .navbar-default .navbar-nav>li>a {
            width:200px;
            font-weight:bold;
        }
        .mega-dropdown {
            position: static !important;
            width:100%;
        }
        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            box-shadow: none;
            -webkit-box-shadow: none;
        }
        .mega-dropdown-menu:before {
            content: "";
            border-bottom: 15px solid #fff;
            border-right: 17px solid transparent;
            border-left: 17px solid transparent;
            position: absolute;
            top: -15px;
            left: 285px;
            z-index: 10;
        }
        .mega-dropdown-menu:after {
            content: "";
            border-bottom: 17px solid #ccc;
            border-right: 19px solid transparent;
            border-left: 19px solid transparent;
            position: absolute;
            top: -17px;
            left: 283px;
            z-index: 8;
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
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.428571429;
            color: #999;
            white-space: normal;
        }
        .mega-dropdown-menu > li ul > li > a:hover,
        .mega-dropdown-menu > li ul > li > a:focus {
            text-decoration: none;
            color: #444;
            background-color: #f5f5f5;
        }
        .mega-dropdown-menu .dropdown-header {
            color: #428bca;
            font-size: 18px;
            font-weight:bold;
        }
        .mega-dropdown-menu form {
            margin:3px 20px;
        }
        .mega-dropdown-menu .form-group {
            margin-bottom: 3px;
        }

        /*********************************************/
        #menu_principal {
            padding: 2px;
            margin-right: 20px;
            border: 2px solid #fff;
        }
        #menu_principal > a{
            margin: 0 auto;
        }
    </style>


</head><>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Emidio Carlos Nhacudima  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a id="utilizadorLog" href="user.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Adicionar Utilizador</a>
                        </li>
                        <li id="updateU"><a href="../recontagem/userUpdate.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"></use></svg> Mudar Password</a>
                        </li>
                        <li><a href="../recontagem/"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sair</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
    <!-- /.container-fluid -->
</nav>

<!--div para o botão de menu-->
<div>

</div>


<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 350px;
    }
    #titulo{
        color: #1285de;
        font-size: 2em;
        font-weight: 900;
        text-transform: uppercase;
    }
    #painel-link:hover{
        text-decoration: none;
        font-size: 1em;
        font-weight: 700;
    }
    /* Optional: Makes the sample page fill the window. */
</style>

<div id="wrapper">
    <div class="overlay"></div>

    @yield('content')

</div>
</div>


</body>

</html>


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






