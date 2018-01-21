@extends('layouts.pag')

@section('content')
    <style>
        .login{
            background-color: #73a534;
            border: 2px solid #73a534;
            color: #FFFFFF;
            width: 30%;
            display: block;
            word-spacing: 1px;
            outline: none;
            margin: 0 auto;
            font-size: 13px;
            text-transform: uppercase;
            margin-top: 10px;
            font-weight: 700;
            padding: 10px;
            -webkit-transition: all 0.3s ease-in-out !important;
            -moz-transition: all 0.3s ease-in-out !important;
            -ms-transition: all 0.3s ease-in-out !important;
            -o-transition: all 0.3s ease-in-out !important;
            transition: all 0.3s ease-in-out !important;
        }
    </style>

    <div class="content">
        <div class="container wow fadeInUp delay-03s">
            <div class="row">
                <div class="logo text-center">
                    <a href="{{route('login')}}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="250"></a>
                    <h2>PSI Moçambique | DQA</h2>
                </div>

                <div class="subcription-info text-center" style="margin-top: 50px">
                    <a href="{{route('login')}}" class="login">Login</a>
                    <p class="sub-p">We Promise to never span you.</p>
                </div>
            </div>
        </div>
        <!--
                <section>
                    <div class="container">
                        <div class="row bort text-center">
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                -->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="about-title">
                            <h2>About Us</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </br>voluptatum deleniti atque corrupti quos dolores e</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-02s">
                            <div class="img">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <h3 class="abt-hd">Our process</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="img">
                                <i class="fa fa-eye"></i>
                            </div>
                            <h3 class="abt-hd">Our Vision</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-06s">
                            <div class="img">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="abt-hd">Our Approach</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp delay-08s">
                            <div class="img">
                                <i class="fa fa-dot-circle-o"></i>
                            </div>
                            <h3 class="abt-hd">Our Objective</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection