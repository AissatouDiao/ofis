<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>ChariteMax HTML Template</title> 

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Fav Icons -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
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
    <?php
    include('../resources/views/nav.blade.php');
    
    ?>

    <!-- Main slider -->
    <section class="main-slider">
        <div class="container-fluid">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                <li class="slider-wrapper">
                    <div class="image"><img src="../resources/images/image2.jpg" style="width:1920px;height:760px;" alt=""></div>
                    <div class="slider-caption light text-center">
                        <div class="container">
                            <h3>Bienvenue sur notre plateforme OFIS<span class="border-shape"></span></h3>
                            <h1>Nous sommes un organisme pour la facilitation du financement de latrines en milieu rural</h1>
                            <div class="text light large-text">Solidarité et Partage</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-two">En savoir plus</a></div>
                        </div>                            
                    </div>
                    <div class="slide-overlay"></div>
                </li>
                <li class="slider-wrapper">
                    <div class="image"><img src="../resources/images/image3.jpg" style="width:1920px;height:760px;" alt=""></div>
                    <div class="slider-caption light text-center">
                        <div class="container">
                            <h3>Bienvenue sur notre plateforme OFIS <span class="border-shape"></span></h3>
                            <h1>Faites un don et aider des familles entières à vivre dans un cadre sain</h1>
                            <div class="text light large-text">Solidarité et partage</div>
                            <div class="link-btn"><a href="./dons" class="theme-btn btn-style-two">Faire un don</a></div>
                        </div>                          
                    </div>
                    <div class="slide-overlay"></div>
                </li>
            </ul>
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
                        <h4><a href="#">Faire un don</a></h4>
                        <div class="text">un petit geste pour une grande aide pour une famille. </div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                 <!-- services block -->
                 <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-boy"></span></div>
                        <h4><a href="#">Projets en cours</a></h4>
                        <div class="text">Consulter nos projets en cours de développement.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                  <!-- services block -->
                  <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-donation"></span></div>
                        <h4><a href="#">Nos réalisations</a></h4>
                        <div class="text">Consulter les projets que nous avons eu à réaliser</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-heart-box"></span></div>
                        <h4><a href="#">Consulter notre blog</a></h4>
                        <div class="text">Passez par ici pour lire les articles de notre blog.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
               
               
              
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 image-block-one">
                    <div class="image big-image"><img src="../resources/images/logo-ofis.png" style="width:550px;height:521px"alt=""></div>
                    <div class="image small-image"><img src="../resouces/images/resource/about-small.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="pl-lg-5">
                        <!-- sec-title -->
                        <div class="sec-title style-two">
                            <h4>L'assainissement une priorité</h4>
                            <h1>Nous sommes <span>OFIS</span></h1>
                        </div>
                        <!-- about block -->
                        <div class="about-block">
                            <div class="inner-box">
                                <div class="text">

                                    <p>Nous sommes un groupe de jeunes personnes qui ont pris conscience du problème de l'assainissement, surtout dans le milieu rural. Dans cette zone, le manque de latrines dans les maisons, a d'énormes conséquences sur la population notamment la santé. C'est cela qui nous a poussé à penser à une solution qui pourrait régler ces problèmes, la plateforme OFIS(Merci de nous rendre visite ;))</p>
                                    <p>OFIS est une plateforme, qui facilite le financement de latrines en milieu rural, nous comptons sur votre soutien pour offrir à ces populations un meilleur cadre de vie </p>
                                </div>
                                <div class="author">
                                    <div class="inner-box">
                                        <h5>OFIS Team</h5>
                                    </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <section class="causes-section sp-two">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"></div>
                <h1>Projets <span>en cours</span></h1>
                <div class="text">Children and poor people are at high risk of severe malnutrition & no education</div>
            </div>
            <div class="row clearfix">
                @foreach($projets as $projet)
                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6">
                    <div class="inner-box">
                          <figure class="image">
                            <img src="{{$projet->image}}" style="width:360px;height:280px" alt="">
                            <div class="overlay">
                            </div>
                           </figure>
                        <div class="lower-content">
                            <h5>Toute aide est la bienvenue</h5>
                            <h4>{{$projet->titre}}</h4>
                            <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed consequat duis autes ure dolor. dolore magna aliqua nim ad minim. </div>


                            <!--Progress Levels-->
                            <div class="progress-levels">
                                        
                                <!--Skill Box-->
                                <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="20"><div class="percent"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
<?php 
$pourcentage= $projet->montant_goal+1;
?>
                            <div class="donate clearfix">
                                <div class="float-left">
                                    <span>{{$projet->donsprojet->montant}}</span>
                                </div>
                                <div class="float-right">
                                    {{$projet->montant_goal}} FCFA
                                </div>
                            </div>
                            
                            <div class="link-btn"><a href="./donsurprojet/{{$projet->id}}" class="theme-btn btn-style-four donate-box-btn">Donate Now</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Fact Counter -->
    <div class="fact-counter sp-two" style="background-image: url(images/background/1.jpg)">
        <div class="container">
            <div class="row">

                <!--Column-->
                <article class="column counter-column col-xl-3 col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms">
                    <div class="item">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-donation-1"></span></div>
                            <div class="count-outer">
                                <span class="count-text" data-speed="3000" data-stop="98520">0</span>
                                <p>Received Donations</p>
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
                                <span class="count-text" data-speed="3000" data-stop="30682">0</span>
                                <p>Received Donations</p>
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
                                <span class="count-text" data-speed="3000" data-stop="6184">0</span>
                                <p>Our Volunteers</p>
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
                                <span class="count-text" data-speed="3000" data-stop="14369">0</span>
                                <p>Projects Done</p>
                            </div>
                        </div>                                                      
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <section class="mission-section sp-one" style="background-image: url(images/background/2.jpg)">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="images/icons/sec-title.png" alt=""></div>
                <h1>Mission & <span>Goals</span></h1>
                <div class="text">Many children and poor people are at high risk of severe malnutrition</div>
            </div>
            <div class="row">
                <div class="col-xl-9">
                    <div class="row clearfix">
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            <h4>Homeless Children</h4>
                                        </div>
                                            
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Homeless Children</h4>
                                                <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-doctor"></span></div>
                                            <h4>Medical Facilities</h4>
                                        </div>
                                            
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Medical Facilities</h4>
                                                <div class="icon-box"><span class="flaticon-doctor"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-cancer"></span></div>
                                            <h4>Education For All</h4>
                                        </div> 
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Education For All</h4>
                                                <div class="icon-box"><span class="flaticon-cancer"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-support"></span></div>
                                            <h4>Love Your World</h4>
                                        </div>
                                            
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Love Your World</h4>
                                                <div class="icon-box"><span class="flaticon-support"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-blood"></span></div>
                                            <h4>Save Water Food</h4>
                                        </div>
                                            
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Save Water Food</h4>
                                                <div class="icon-box"><span class="flaticon-love-and-romance"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mission block -->
                        <div class="col-xl-4 col-lg-6 col-md-6 mission-block">
                            <div class="inner-box">
                                <div class="image">
                                    <div class="caption">
                                        <div>
                                            <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                            <h4>Crowdfunding</h4>
                                        </div>
                                            
                                    </div>
                                    
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <div class="text">Nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute lorem ipsum.</div>
                                                <h4>Crowdfunding</h4>
                                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        
                    </div> 
                </div>
            </div>
                
        </div>
    </section>

    <!-- Event section -->
    <section class="event-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 image-block-one">
                    <div class="image big-image"><img src="images/resource/upcomming-event.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="sp-three">
                        <!-- sec-title -->
                        <div class="sec-title style-two">
                            <h4>A Charity with Mission</h4>
                            <h1>Upcoming <span>Events</span></h1>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation.</div>
                        </div>
                        
                        <div class="row">
                            <!-- Event block -->
                            <div class="col-md-6 event-block">
                                <div class="inner-box">
                                    <div class="date">25 <span>July</span></div>
                                    <div class="organizer">Organized By: <a href="#">Charite Max</a></div>
                                    <h4>Sports Event for funding charity for innocent people</h4>
                                    <ul class="post-meta">
                                        <li><span class="fa fa-clock"></span>Starts 5.00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span>121 Kings St. NY 26038</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Event block -->
                            <div class="col-md-6 event-block">
                                <div class="inner-box">
                                    <div class="date">31 <span>August</span></div>
                                    <div class="organizer">Organized By: <a href="#">Charite Partner</a></div>
                                    <h4>Sports Event for funding charity for innocent people</h4>
                                    <ul class="post-meta">
                                        <li><span class="fa fa-clock"></span>Starts 5.00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span>121 Kings St. NY 26038</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-fourteen">Events Calender</a></div>
                    </div>
                        
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="our-team sp-one">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="images/icons/sec-title.png" alt=""></div>
                <h1>OFIS <span>Team</span></h1>
                <div class="text">L'assainissement,une priorité pour tous </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="../resources/images/lopict.jpg" style="width:263px;height:270px;"alt="">
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
                            <img src="images/resource/team-2.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Scott William</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Scott William</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Liam Irvines</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Diana Leslie</a></h4>
                        </div>
                    </div>
                </div>
                <!-- team block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="">
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
                            <div class="designation">Volunteer</div>
                            <h4><a href="team.html">Tania Vandy</a></h4>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- Parallax section -->
    <section class="parallax-section" style="background-image: url(images/background/3.jpg)">
        <div class="container">
            <h1>Nous aidons des familles à vivre dans un meilleur cadre <br> en leur facilitant l'accès aux latrines</h1>
            <h3>Aider nous à leur venir en aide en faisant un don <span class="border-shape"></span></h3>
        </div>
    </section>

    <!-- Testimonial Section -->
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
    </section>
    <!--End Testimonial Section-->

    <!-- News Section -->
    <section class="news-section sp-two">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="images/icons/sec-title.png" alt=""></div>
                <h1>What’s <span>Happening</span></h1>
                <div class="text">Poor people are at high risk of severe malnutrition & no education</div>
            </div>
            <div class="row clearfix">
                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-1.jpg" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>                                
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">31 <span>JULY</span></div>
                            <div class="post-meta">By: <span> ChariteMax</span></div>
                            <h4><a href="blog-details.html">Feeding the poor people</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-2.jpg" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>                                
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">25 <span>AUG</span></div>
                            <div class="post-meta">By: <span> ChariteMax</span></div>
                            <h4><a href="blog-details.html">Take care of children</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-3.jpg" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="blog-details.html">
                                    <i class="fa fa-link"></i>
                                </a>      
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">18 <span>SEP</span></div>
                            <div class="post-meta">By: <span> ChariteMax</span></div>
                            <h4><a href="blog-details.html">Take care of children</a></h4>
                            <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea sed consequat duis autese dolore magna aliqua nim. </div>
                            <div class="read-more-btn">
                                <a href="blog-details.html" class="read-more">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                
            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="subscribe-section" style="background-image: url(images/background/4.jpg)">
        <div class="container">
            <div class="row">
                <div class="title-column col-lg-8">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nostrud</div>
                </div>
                <div class="subscribe-form col-lg-4">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Your email..." required="">
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
                                            <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Significantly pushed under the frugal lemur one and meretricious lucrative inside before swept magnificently expand business.</div>
                                        <ul class="social-icon-three">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5">
                                <div class="footer-widget services-widget">
                                    <h2 class="widget-title">Our Partners</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">Donate ChariteMax</a></li>
                                            <li><a href="#">Save Our Earth</a></li>
                                            <li><a href="#">Water Shortages</a></li>
                                            <li><a href="#">Plant Trees Welfare</a></li>
                                            <li><a href="#">Recycle Better Way</a></li>
                                            <li><a href="#">Get A Food Plate</a></li>
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
                            <div class="footer-column col-md-7">
                                <div class="footer-widget posts-widget">
                                    <h2 class="widget-title">Recent Posts</h2>
                                    <div class="widget-content">
                                        <div class="posts">
                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <img src="images/resource/post-thumb-1.jpg" alt="">
                                                    <a href="blog-single.html" class="overlay-link">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </figure>
                                                <div class="desc-text">
                                                    <a href="blog-single.html">Nine-year old princess hair donating now</a>
                                                </div>
                                                <div class="time">Aug 25, 2018</div>
                                            </div>

                                            <div class="post">
                                                <figure class="post-thumb">
                                                    <img src="images/resource/post-thumb-2.jpg" alt="">
                                                    <a href="blog-single.html" class="overlay-link">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </figure>
                                                <div class="desc-text">
                                                    <a href="blog-single.html">City town host charity 5km run for poor people</a>
                                                </div>
                                                <div class="time">Sep 31, 2018</div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact</h2>
                                    <div class="widget-content">
                                        <ul class="contact-info-list">
                                            <li><i class="fas fa-map-marker-alt"></i>3571 Ringer House, Newyork, NY, 33220 USA</li>
                                            <li><i class="fas fa-phone"></i>Support: +(034) 256 7850</li>
                                            <li><i class="fas fa-envelope-open"></i>Email: info@example.com</li>
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
         <div class="footer-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="float-sm-left">
                        <div class="copyright-text">
                            <p>Copyrights © 2018 <a href="index.html">ChariteMax</a>. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Terms of Use </a></li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </footer>


    

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