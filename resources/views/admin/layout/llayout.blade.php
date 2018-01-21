<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PSI Moz | DQA</title>

    <style>
        body {
            background: #f1f4f7;
        }
    </style>
</head>
<body>

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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>