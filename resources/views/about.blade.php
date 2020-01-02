<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OFIS assainissement</title>

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>
<!-- Caroussel picture -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
                                @if(Auth::check()) @if(Auth::user()->is_admin==0)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <h5 style="color:white">
                                        <div class="icon"><span class="flaticon-social"> {{ Auth::user()->name }}  {{ Auth::user()->prenom }}</span></div>
                                    </h5> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./myp">Mon Projet</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Deconnexion') }}
                                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;background-color:black;">
                                        @csrf
                                    </form>
                                </div>
                                @elseif(Auth::user()->is_admin==1)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <h5 style="color:white">
                                        <div class="icon"><span class="flaticon-social"> {{ Auth::user()->name }}  {{ Auth::user()->prenom }}</span></div>
                                    </h5> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="admin">Administration</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Deconnexion') }}
                                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;background-color:black;">
                                        @csrf
                                    </form>
                                </div>
                                @endif @else

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <h6 style="color:white">
                                        <div class="icon"><span class="flaticon-social"> Se connecter | S'inscrire</span></div>
                                    </h6> <span class="caret"></span>
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
                            <li class="current"><a href="{{ url('aboutus') }}">A propos de nous</a></li>
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
                            
                            <li ><a href="{{ url('home' )}}">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li class="current"><a href="{{ url('aboutus') }}">A propos de nous</a></li>
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

    <!--Page title-->
    <section class="page-title" style="background-image:url(/images/blue-ball.jpg)">
        <div class="container">
            <h1>A propos de nous</h1>
        </div> 
    </section>

    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fa fa-home"></span>Accueil</a></li>
                <li class="active">A propos de nous</li>
            </ul>
        </div>
    </div>

    <section class="feature-section">

       <div class="row m-0 d-flex justify-content-center">
  <div id="myCarousel" class="carousel slide " data-ride="carousel" style="width:50%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="../resources/images/image1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="../resources/images/image3.jpg" alt="" style="width:100%;" >
      </div>
    
      <div class="item">
        <img src="../resources/images/image4.jpg" alt="" style="width:100%;" >
      </div>
      <div class="item">
        <img src="../resources/images/image7.jpg" alt="" style="width:100%;" >
      </div>
      <div class="item">
        <img src="../resources/images/image8.jpg" alt="" style="width:100%;" >
      </div>
      <div class="item">
        <img src="../resources/images/image9.jpg" alt="" style="width:100%;" >
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
    </section>


    <!-- About Us -->
    <section class="about-us-two sp-four">
        <div class="container">
            <!-- about block -->
            <div class="about-block-two">
                <div class="inner-box">
                    <h4>L'assainissement, une priorité <span></span></h4>
                    <h1>Nous sommes <span class="theme-color">OFIS</span></h1>
                    <div class="text">

<p>Nous sommes un groupe de jeunes personnes qui ont pris conscience du problème de l'assainissement, surtout dans le milieu rural. Dans cette zone, le manque de latrines dans les maisons, a d'énormes conséquences sur la population notamment la santé. C'est cela qui nous a poussé à penser à une solution qui pourrait régler ces problèmes, la plateforme OFIS(Merci de nous rendre visite ;))</p>
<p>OFIS est une plateforme, qui facilite le financement de latrines en milieu rural, nous comptons sur votre soutien pour offrir à ces populations un meilleur cadre de vie </p>
</div>
                    <div class="author">
                        
                          
                            <h5>OFIS Team</h5>
                       
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Fact Counter -->
    <div class="fact-counter sp-two style-two">
        <div class="container">
            <div class="row">

                <!--Column-->
                <article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-donation-1"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="0">0</span>
                                <p>Dons</p>
                            </div>
                        </div>                                                      
                    </div>
                </article>

                <!--Column-->
                <article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="300ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-balloon"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="0">0</span>
                                <p>Donateurs</p>
                            </div>
                        </div>                                                      
                    </div>
                </article>
                    
                <!--Column-->
                <article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="600ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-shirt"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="0">0</span>
                                <p>Volontaires</p>
                            </div>
                        </div>                                                      
                    </div>
                </article>
                

                <!--Column-->
                <article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-ecology"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="0">0</span>
                                <p>Projets Finis</p>
                            </div>
                        </div>                                                      
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- Disaster response -->
    <section class="parallax-section" style="background-image: url(/images/blue-heart1.jpg)">
        <div class="container">
            <h1>Nous aidons des familles à vivre dans un meilleur cadre <br> en leur facilitant l'accès aux latrines</h1>
            <h3>Aider nous à leur venir en aide en faisant un don <span class="border-shape"></span></h3>
        </div>
    </section>

        <!-- Welcome Section -->
        <section class="welcome-section sp-two">
                <div class="container">
                    <div class="row">
                        <!-- services block -->
                        <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                            <div class="inner-box hvr-float-shadow">
                                <div class="icon"><span class="flaticon-button"></span></div>
                                <h4><a href="{{url('donspage')}}">Faire un don</a></h4>
                                <div class="text">un petit geste pour une grande aide.</div>
                                <div class="read-more">
                                    <a href="{{url('donspage')}}"><span class="flaticon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- services block -->
                        <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                            <div class="inner-box hvr-float-shadow">
                                <div class="icon"><span class="flaticon-support"></span></div>
                                <h4><a href="{{url('projets')}}">Projets en cours</a></h4>
                                <div class="text">Consulter nos projets en cours de développement.</div>
                                <div class="read-more">
                                    <a href="{{url('projets')}}"><span class="flaticon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- services block -->
                        <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                            <div class="inner-box hvr-float-shadow">
                                <div class="icon"><span class="flaticon-donation"></span></div>
                                <h4><a href="{{url('blog')}}">Nos réalisations</a></h4>
                                <div class="text">Consulter les projets que nous avons eu à réaliser</div>
                                <div class="read-more">
                                    <a href="{{url('blog')}}"><span class="flaticon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- services block -->
                        <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                            <div class="inner-box hvr-float-shadow">
                                <div class="icon"><span class="flaticon-quotations"></span></div>
                                <h4><a href="{{url('blog')}}">Consulter notre blog</a></h4>
                                <div class="text">Passez par ici pour lire les articles de notre blog.</div>
                                <div class="read-more">
                                    <a href="{{url('blog')}}"><span class="flaticon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </section>

    <section class="our-team sp-one">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="/images/team.png"  style="width:128px;128px" alt=""></div>
                <h1>OFIS <span>Team</span></h1>
                <div class="text">L'assainissement,une priorité pour tous </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/images/pic2.jpg" style="width:263px;height:270px;"alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Ingenieur agronome</div>
                            <h4><a href="team.html">Momar Lo</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="/images/pic1.jpg" alt="">
                            <div class="overlay-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="designation">Econome</div>
                            <h4><a href="team.html">Moustapha Diao</a></h4>
                        </div>
                    </div>
                </div>
               
         
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- Testimonial Section 
    <section class="testimonial-section sp-one">
        <div class="container">

            <div class="single-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-none">
                
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author.jpg" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>ChariteMax Donator</span></h3>
                    </div>
                </div>

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author.jpg" alt="">
                        </div>
                        <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy. </div>
                        <h3>Sande Well  <span>ChariteMax Donator</span></h3>
                    </div>
                </div>
            
            </div>
            
        </div>
    </section>-->
    <!--End Testimonial Section-->

    <!-- Feature section -->
 

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
                                            <a href="index.html"><img src="/images/petit-logo.png" alt=""></a>
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
                                            <li><i class="fas fa-phone"></i>Support: +(221) 77 436 66 84</li>
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
<!--End pagewrapper-->
    
 

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    

<!-- jequery plugins -->

<?php
include('../resources/views/footer.php');
?>

</body>
</html>
