<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ChariteMax HTML Template</title>

<!-- Stylesheets -->

<link href="../../resources/sass/bootstrap.css" rel="stylesheet">
<link href="../../resources/sass/style.css" rel="stylesheet">
<link href="../../resources/sass/responsive.css" rel="stylesheet">
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
    
<header class="main-header">

<!-- header top -->
<div class="header-top dark">
    <div class="container">
        <div class="outer-box">
            <!--Top Left-->
            <div class="top-left">
             
            </div>

            <!--Top Right-->
            <div class="top-right">
                
                <div class="social-links clearfix">
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-facebook"></span></a>
                    <a href="#"><span class="fab fa-google-plus"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                </div>
                
            </div>
        </div>
            
    </div>
</div>

<!--Header-Upper-->
<div class="header-upper ">
    <div class="container-fluid clearfix">
            
        <div class="float-left logo-outer">
            <div class="logo"><a href="./home"><img src="../../resources/images/petit-logo.png"  alt="" title=""></a></div>
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
                        <li><a href="./home">Accueil</a></li>
                            <li><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li><a href="{{ url('blog1') }}">Blog</a></li>
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
                <a href="./home" class="img-responsive"><img src="../../resources/images/petit-logo.png" alt="" title=""></a>
            </div>
            
            <!--Right Col-->
            <div class="right-col float-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            
                            <li><a href="./home">Accueil</a></li>
                            <li><a href="./projets">Nos projets</a></li>
                            <li><a href="./blog1">Blog</a></li>
                            <li><a href="./aboutus">A propos de nous</a></li>
                            <li><a href="./contact">Contact</a></li>
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
    <section class="page-title" style="background-image:url(../../resources/images/backblog.jpg)">
        <div class="container">
            <h1>{!! $articles->titre!!}</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Article</li>
            </ul>
        </div>
    </div>

    <!-- Sidebar page -->
    <div class="sidebar-page-container">
        <div class="container">
            <div class="row">
                
                <!--Content Side / Blogs Classic-->
                <div class="content-side col-lg-8">
                    <!-- Blog single -->
                    <div class="blog-single">
                        <div class="inner-box">
                            <div class="image">
                                <img src="images/resource/news-10.jpg" alt="">
                            </div>
                            <div class="lower-box">
                                <div class="top-content">
                                    <div class="date">05 <span>JULY</span></div>
                                    <h4><a href="blog-details.html">{!! $articles->titre!!}</a></h4>
                                    <ul class="post-meta">
                                        <li><span class="far fa-user"></span>By: OFIS Team</li>
                                        <li><span class="far fa-comment"></span>Comment {{$articles->comments->count()}}</li>
                                        <li><span class="far fa-heart"></span>39</li>
                                        <div class="text mb-30">{!! $articles->content !!}</div>
                                    </ul>
                                </div>
                                 
                                
                                <div class="text"></div>
                            </div>

                        </div>
                    </div>

                    <!--post-share-options-->
                    <div class="post-share-options clearfix mb-50">
                        <div class="float-left tags"><span>TAGS </span><a href="#">Charity</a> <a href="#">Donation </a> <a href="#">Protection</a> <a href="#">Food</a></div>
                        <div class="float-right">
                            <span>Share This</span>
                            <ul class="social-icon-three">
                                <li class="share"><i class="flaticon-share-symbol"></i></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Author box -->
                    <div class="author-box">
                        <span class="border-shape-left"></span>
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/author-4.jpg" alt=""></div>
                            <div class="name">David B. Miller</div>
                            <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed conseua duis autes ure dolor magna aliqua nim ad minim voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                        </div>
                        <span class="border-shape-right"></span>
                    </div>

                    <!--Comments Area-->
                    <div class="comments-area">
                        <div class="group-title">
                            <h2>Comments ({{$articles->comments->count()}})</h2>
                            <div class="separator">
                            </div>
                        </div>
                        @foreach ($articles->comments as $commentaire)
                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment"> 
                                <div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
                                <div class="comment-inner clearfix">
                                    <div class="comment-info clearfix"><strong>{{$commentaire->nom}}.</strong></div>
                                    <div class="text">{{$commentaire->commentaire}}</div>
                                    <div class="comment-time">{{$articles->created_at->diffForHumans()}} <a class="comment-reply" href="#">Reply <span class="fa fa-reply"></span></a></div>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                   
                    <!--End Comments Area-->
                    
                    <!--Comment Form-->
                    <div class="comment-form">
                        <div class="group-title">
                            <h2>Post a Comment</h2>
                            <div class="separator">
                            </div>
                        </div>
                        <form method="post" action="{{route('commentaire', [$articles->id])}}">
                        @csrf
                        @method('post')
                            <div class="row clearfix">
                              <input type="hidden" name="summernote_id" value="$articles->id">
                                <div class="column col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="nom" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="column col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="column col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="commentaire" placeholder="commentaire"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- End form -->
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4">
                    <aside class="sidebar right-sidebar">
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Popular Posts-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Articles récents</h4>
                                <div class="separator">
                                </div>
                            </div>
                             
                            @foreach($articles->orderBy('id', 'desc')->take(3)->get() as $article)
                            <article class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-details.html">{{$article->titre}}</a></div>
                                <div class="post-info">{{$article->created_at}}</div>
                            </article>
                @endforeach
                            
                        </div>
                        <!--Category widget-->
                        <div class="sidebar-widget categories-widget">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <div class="inner-box">
                                <ul>
                                    <li><a href="#">Charity for children</a></li>
                                    <li class="active"><a href="#">Feed the hungry people</a></li>
                                    <li><a href="#">Donations: How to?</a></li>
                                    <li><a href="#">Duties & resposibilities</a></li>
                                    <li><a href="#">Food supply chains</a></li>
                                    <li><a href="#">Our trusted partners</a></li>
                                </ul>
                            </div>
                        </div>

                        
                        <!-- Feature cause -->
                        <div class="sidebar-widget cause-widget">
                            <div class="sidebar-title">
                                <h4>Featured Cause</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <div class="inner-box">
                                <figure class="image">
                                    <img src="images/resource/cause-1.jpg" alt="">
                                    <div class="overlay"><a href="cause-details.html" class="theme-btn btn-style-two donate-box-btn">Donate Now</a>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h4>Poor Children’s Food</h4>
                                    <div class="text">Auis nostrud exercitation ullamc laboris nisitm aliquip ex bea sed duis.</div>


                                    <!--Progress Levels-->
                                    <div class="progress-levels">
                                                
                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" data-percent="80"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="donate clearfix">
                                        <div class="float-left">
                                            <span>Raised: $6,500</span>
                                        </div>
                                        <div class="float-right">
                                            Goal: $10,000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial -->
                        <div class="sidebar-widget testimonial-widget">
                            <div class="sidebar-title">
                                <h4>Donor Reviews</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <div class="single-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-none">
                                <div class="inner-box">
                                    <div class="text">Everyone realizes why a new common language would desirable : one could refuse to pay expensive translators. To achieve this, would be necessary have uniform grammar words. </div>
                                    <div class="author">
                                        <div class="image"><img src="images/resource/author-3.jpg" alt=""></div>
                                        <h3>Sande Well</h3>
                                        <div class="designation">ChariteMax Donator</div>
                                    </div>
                                    
                                </div>
                                <div class="inner-box">
                                    <div class="text">Everyone realizes why a new common language would desirable : one could refuse to pay expensive translators. To achieve this, would be necessary have uniform grammar words. </div>
                                    <div class="author">
                                        <div class="image"><img src="images/resource/author-3.jpg" alt=""></div>
                                        <h3>Sande Well</h3>
                                        <div class="designation">ChariteMax Donator</div>
                                    </div>
                                    
                                </div>
                            
                            </div>
                        </div>

                        <!-- Gallery widget -->
                       

                        <!--Category widget-->
                        <div class="sidebar-widget categories-widget">
                            <div class="sidebar-title">
                                <h4>Archive</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <div class="inner-box">
                                <ul>
                                    <li><a href="#">August 2018</a></li>
                                    <li class="active"><a href="#">September 2018</a></li>
                                    <li><a href="#">October 2018</a></li>
                                    <li><a href="#">November 2018</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="sidebar-widget contact-info-widget">
                            <div class="sidebar-title">
                                <h4>Contact Information</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <ul class="contact-info-list">
                                <li><span class="fas fa-map-marker-alt"></span><b>Address</b>4050 Smithfield Avenue, Amarillo, FL 79013</li>
                                <li><span class="fa fa fa-envelope-open"></span><b>Email</b>info@charite-max.org</li>
                                <li><span class="fa fa-phone"></span><b>Phone / Fax</b>+ (025) 367 09876</li>
                            </ul>
                        </div>

                        <!-- end widget -->
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>

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


</div>
<!--End pagewrapper-->
    
<div id="donate-popup" class="donate-popup">
    <div class="close-donate theme-btn"><span class="flaticon-cross"></span></div>
    <div class="popup-inner">


    <div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h4>How much would you like to donate:</h4>

            <form  action="#" class="donate-form default-form">
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="radio" id="donate-amount-1" name="donate-amount" />
                        <label for="donate-amount-1" data-amount="1000" >$1000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                        <label for="donate-amount-2" data-amount="2000">$2000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-3" name="donate-amount" />
                        <label for="donate-amount-3" data-amount="3000">$3000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-4" name="donate-amount" />
                        <label for="donate-amount-4" data-amount="4000">$4000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="5000">$5000</label>
                    </li>
                    <li class="other-amount">

                        <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                            <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"  />
                        </div>
                    </li>
                </ul>

                <h3>Donor Information</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <p>Your Name*</p>
                                <input type="text" name="fname" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Email*</p>
                                <input type="text" name="fname" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Address*</p>
                                <input type="text" name="fname" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <p>Phn Num*</p>
                                <input type="text" name="fname" placeholder="">
                            </div>
                        </div>  

                    </div>
                </div>

                <ul class="payment-option">
                    <li>
                        <h4>Choose your payment method:</h4>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Paypal</span>
                            </label>
                        </div>
                    </li>
                    <li>
                       <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Offline Donation</span>
                            </label>
                        </div> 
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Credit Card</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input name="pay-us" type="checkbox">
                                <span>Debit Card</span>
                            </label>
                        </div>
                    </li>
                </ul>

                <div class="center"><button class="theme-btn btn-style-one" type="submit">Donate Now</button></div>
                    
            
            </form>
        </div>
    </div>

            
        
    </div>
</div>    

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    


<!-- jequery plugins -->
<script src="../../resources/js/jquery.js"></script>
<script src="../../resources/js/popover.js"></script>
<script src="../../resources/js/bootstrap.min.js"></script>

<script src="../../resources/js/wow.js"></script>
<script src="../../resources/js/owl.js"></script>
<script src="../../resources/js/validate.js"></script>
<script src="../../resources/js/mixitup.js"></script>
<script src="../../resources/js/isotope.js"></script>
<script src="../../resources/js/appear.js"></script>
<script src="../../resources/js/jquery.fancybox.js"></script>

<script src="../../resources/js/script.js"></script>

</body>
</html>