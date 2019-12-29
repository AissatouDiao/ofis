<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OFIS assainissement</title>

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>

<!-- Fav Icons -->
<link rel="shortcut icon" href="/images/petit-logo.png" type="image/x-icon">
<link rel="icon" href="/images/petit-logo.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

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
                <h5 style="color:white"> <div class="icon"><span class="flaticon-social"> {{ Auth::user()->name }}</span></div></h5> <span class="caret"></span>
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
                                        <a class="dropdown-item" href=".admin">Mon Projet</a>
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
            
        <div class="float-left logo-outer">
            <div class="logo"><a href="./home"><img src="/images/petit-logo.png"  alt="" title=""></a></div>
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
                        <li><a href="{{ url('home') }}">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('aboutus') }}">A propos de nous</a></li>
                            <li class="current"><a href="{{ url('contact') }}">Contact</a></li>
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
                    <div class="link-btn"><a href="{{url('donspage')}}" class="theme-btn btn-style-two donate-box-btn">Faire un don</a></div>
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
                            
                            <li><a href="{{ url('home' )}}">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('aboutus') }}">A propos de nous</a></li>
                            <li class="current"><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
            
        
    </div>
</div>
<!--End Sticky Header-->
</header>

    <!--Page title-->
    <section class="page-title" style="background-image:url(/images/contacus.jpg)">
        <div class="container">
            <h1>Contactez nous</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fa fa-home"></span>Accueil</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>

    <!-- map section -->
    <section class="map-section">
        <div class="home-google-map">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="14.69457515" 
                data-map-lng="-17.44585991" 
                data-icon-path="/images/map-marker.png"
                data-map-title="Chester"
                data-map-zoom="11" >
            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section class="contact-form-section sp-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mb-30">
                @if(!empty($successMsg))
                                <div class="alert alert-success"> {{ $successMsg }}</div>
                                @endif
                    <div class="default-form-area">
                               
                        <h1>Envoyez nous un message</h1>
                        {!! Form::open(['url' => 'contact','class' => 'contact-form style-five']) !!}
                            <div class="row clearfix">
                            
                       

                                <div class="col-md-6 column">        
                                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                        <label for="">Nom</label>
                                        <input type="text" name="nom" class="form-control" value="" placeholder="" required="">
                                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">  
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control required email" value="" placeholder="" required="">
                                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                                        <label for="">Telephone</label>
                                        <input type="tel" name="telephone" class="form-control" value="" placeholder="">
                                        {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                 <div class="form-group {!! $errors->has('sujet') ? 'has-error' : '' !!}">
                                        <label for="">Sujet</label>
                                        <input type="text" name="sujet" class="form-control" value="" placeholder="">
                                        {!! $errors->first('sujet', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="col-md-12 column">
                                    <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                                        <label for="">Message</label>
                                        <textarea name="texte" class="form-control textarea required" placeholder=""></textarea>
                                        {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>                                            
                            </div>
                            <div class="contact-section-btn">
                                <div class="form-group style-two">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Envoyer</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-5 mb-30 pl-lg-5">
                    <div class="title">
                        <h4>Informations utiles</h4>
                        <div class="text mb-40">Vous pouvez nous contacter à travers nos coordonnées, ci-dessous.</div>
                    </div>
                    <ul class="contact-info-list">
                        <li><span class="fas fa-map-marker-alt"></span><b>Addresse</b>Dakar, Senegal</li>
                        <li><span class="fa fa fa-envelope-open"></span><b>Email</b>ofissenegal@gmailcom</li>
                        <li><span class="fa fa-phone"></span><b>Telephone/ Fax</b>+221 77 436 66 84 </li>
                        <li><span class="fa fa-globe"></span><b>Site Web</b>www.ofisdusenegal.com</li>
                    </ul>
                    <ul class="social-icon-three">
                    <li><a href="https://www.facebook.com/ofisdusenegal"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.twitter.com/ofisdusenegal"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/ofisdusenegal"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/ofisdusenegal"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    
                </div>
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
                    @csrf
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
                                            <li><i class="fas fa-phone"></i>Support: +(221) *** ** **</li>
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


</div>

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    

<!-- jequery plugins -->

<?php
include('../resources/views/footer.php');
?>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
<script src="/js1/gmaps.js"></script>
<script id="map-script" src="/js1/map-script.js"></script>

</body>
</html>