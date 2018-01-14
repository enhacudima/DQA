
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
            color: #ff3546;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
        }

    </style>




</head>
<boby>
<br>



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
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">New in Stores</li>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                            <h4><small>Summer dress floral prints</small></h4>
                                            <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
                                        </div><!-- End Item -->
    <div class="item">
        <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
        <h4><small>Gold sandals with shiny touch</small></h4>
        <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
    </div><!-- End Item -->
    <div class="item">
        <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
        <h4><small>Denin jacket stamped</small></h4>
        <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
    </div><!-- End Item -->
    </div><!-- End Carousel Inner -->
    </div><!-- /.carousel -->
    <li class="divider"></li>
    <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
    </ul>
    </li>
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">Dresses</li>
            <li><a href="#">Unique Features</a></li>
            <li><a href="#">Image Responsive</a></li>
            <li><a href="#">Auto Carousel</a></li>
            <li><a href="#">Newsletter Form</a></li>
            <li><a href="#">Four columns</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Tops</li>
            <li><a href="#">Good Typography</a></li>
        </ul>
    </li>
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">Jackets</li>
            <li><a href="#">Easy to customize</a></li>
            <li><a href="#">Glyphicons</a></li>
            <li><a href="#">Pull Right Elements</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Pants</li>
            <li><a href="#">Coloured Headers</a></li>
            <li><a href="#">Primary Buttons & Default</a></li>
            <li><a href="#">Calls to action</a></li>
        </ul>
    </li>
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">Accessories</li>
            <li><a href="#">Default Navbar</a></li>
            <li><a href="#">Lovely Fonts</a></li>
            <li><a href="#">Responsive Dropdown </a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Newsletter</li>
            <form class="form" role="form">
                <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </ul>
    </li>
    </ul>

    </li>

    </ul>
    </div>

    </div>
    <!-- /.container-fluid -->
    </nav>


</boby>

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



