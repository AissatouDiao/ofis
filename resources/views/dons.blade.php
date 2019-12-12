<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>OFIS assainissement</title> 

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Fav Icons -->
<link rel="shortcut icon" href="/images/petit-logo.png" type="image/x-icon">
<link rel="icon" href="/images/petit-logo.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
</head>
<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div> 
    <!-- main header -->
   
<header class="main-header">

<!-- header top -->
<!-- header top -->
<div class="header-top dark">
    <div class="container-fluid">
        <div class="outer-box">
            <!--Top Left-->
            <div class="top-left">
            @if(Auth::check())
                @if(Auth::user()->is_admin==0)
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <h5 style="color:white"> <div class="icon"><span class="flaticon-social"> {{ Auth::user()->name }}  {{ Auth::user()->prenom }}</span></div></h5> <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="./myp">Mon Projet</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" >
                                            {{ __('Deconnexion') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;background-color:black;">
                                            @csrf
                                        </form>
                                    </div>
                @elseif(Auth::user()->is_admin==1)
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <h5 style="color:white"> <div class="icon"><span class="flaticon-social"> {{ Auth::user()->name }}</span></div></h5> <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="admin">Administration</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" >
                                            {{ __('Deconnexion') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;background-color:black;">
                                            @csrf
                                        </form>
                                    </div>
                @endif
            @else

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <h6 style="color:white"> <div class="icon"><span class="flaticon-social"> Se connecter | S'inscrire</span></div></h6> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                            @endif
                                </div>
            @endif
            </div>

            <!--Top Right-->
            <div class="top-right">
                
            <div class="social-links clearfix">
                    <a href="https://www.twitter.com/ofisdusenegal"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.facebook.com/ofisdusenegal"><span class="fab fa-facebook"></span></a>
                    <a href="https://www.instagram.com/ofisdusenegal"><span class="fab fa-instagram"></span></a>
                    <a href="https://www.linkedin.com/ofisdusenegal"><span class="fab fa-linkedin-in"></span></a>
                </div>
                
            </div>
        </div>
            
    </div>
</div>

<!--Header-Upper-->
<div class="header-upper ">
    <div class="container-fluid clearfix">
            
    <div class="logo float-left">
                <a href="./home" class="img-responsive"><img src="/images/grand-logo.png" alt="" title=""></a>
            </div>
        <div class="float-right upper-right clearfix">
            
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->      
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                       
                        <li class="current" ><a href="{{ url('home') }}">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('aboutus') }}">A propos de nous</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                
                <!-- Main Menu End-->
                
                <!-- Search box -->
                <div class="outer-box">
                    <!--Search outer-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                
            </div>
            
        </div>
            
    </div>
</div>
<!--End Header Upper-->

<!--Sticky Header-->
<div class="sticky-header">
    <div class="container">
        <div class="clearfix">
            <!--Logo-->
            <div class="logo float-left">
                <a href="./home" class="img-responsive"><img src="/images/petit-logo.png" alt="" title=""></a>
            </div>
            
            <!--Right Col-->
            <div class="right-col float-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            
                            <li class="current" ><a href="{{ url('home' )}}">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('aboutus') }}">A propos de nous</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
            
        
    </div>
</div>
<!--End Sticky Header-->
</header>

<section  style="background-image:url(/images/dons.jpg);
background-position: center;background-repeat: no-repeat;
  background-size: cover;">
<div ></div>
<div class="container" style="padding:100px;">

        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Proposition de don</h2>
            </div>

            <h4>Faites nous une proposition de don, nous vous contacterons directement par la suite.</h4>
            @if(!empty($successMsg))
            <div class="alert alert-info"> {{$successMsg}}</div>
            @endif
            <form action="{{route('dons')}}" method="post" enctype="multipart/form-data">
           
            @csrf

            <script>
            var montant=document.getElementById('donate-amount');
            </script>
        

                <h3>Informations sur le don</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                <p>Nom*</p>
                                
                                <input type="text" name="nom" placeholder="">
                                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                                <p>Prénom*</p>
                                
                                <input type="text" name="prenom" placeholder="">
                                {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                <p>Email*</p>
                                <input type="text" name="email" placeholder="">
                                {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
                                <p>Adresse*</p>
                                <input type="text" name="adresse" placeholder="">
                                {!! $errors->first('adresse', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                                <p>Téléphone*</p>
                                <input type="text" name="telephone" placeholder="">
                                {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('montant') ? 'has-error' : '' !!}">
                                <p>Montant de la donation*</p>
                                <input type="number" name="montant" placeholder="">
                                {!! $errors->first('montant', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div> 

                    </div>
                </div>

                <ul class="payment-option">
                    <li>
                        <h4>Choisir de rester anonyme</h4>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="is_ano" type="checkbox">
                                <span>Anonymat</span>
                            </label>
                        </div>
                    </li>
                   

                <div class="center"><button class="theme-btn btn-style-one" type="submit" name="ok">Faire un don</button></div>
                    
            
          </form>
        </div>
    </div>
    </section>

    
    <!-- Call To Action -->
    <section class="subscribe-section" style="background-image: url(/images/newletters.jpg)">
        <div class="container">
            <div class="row">
                <div class="title-column col-lg-8">
                    <h2>S'inscrire à notre Newsletter</h2>
                    <div class="text">Laisser nous votre email, pour recevoir nos newletters...</div>
                </div>
                <div class="subscribe-form col-lg-4">
                    <form method="post" action="{{ route('newletter')}}">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Votre email..." required="">
                            <button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
    </section>

    <!-- Main footer -->
    <footer class="main-footer">
        <div class="container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-lg-5">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="/home"><img src="/images/petit-logo.png" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Suivez nous aussi à travers les réseaux sociaux...</div>
                                        <ul class="social-icon-three">
                                            <li><a href="https://www.facebook.com/ofisdusenegal"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.twitter.com/ofisdusenegal"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/ofisdusenegal"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/ofisdusenegal"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5">
                                <div class="footer-widget services-widget">
                                    <h2 class="widget-title">Nos partenaires</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Enabel</a></li>
                                            <li><a href="#">Concree</a></li>
                                            <li><a href="#">Usaid access</a></li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>                          
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-lg-7">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5">
                                
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact</h2>
                                    <div class="widget-content">
                                        <ul class="contact-info-list">
                                            <li><i class="fas fa-map-marker-alt"></i>Dakar, Senegal</li>
                                            <li><i class="fas fa-phone"></i>Support: (+221) 77 436 66 84 </li>
                                            <li><i class="fas fa-envelope-open"></i>Email: ofissenegal@gmail.com</li>
                                        </ul>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
       
        
    </footer>

    <?php
include('../resources/views/footer.php');
?>
</body>
</html>