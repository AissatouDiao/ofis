<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ChariteMax HTML Template</title>

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div> 

    <!-- main header -->
    <?php
    include('../resources/views/navv.blade.php');
    
    ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(../resources/images/backblog.jpg".jpg)">
        <div class="container">
            <h1>Bienvenue</h1>
        </div>
    </section>
    <div class="bread-crumb">
        <div class="container" class="mt-10">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">Notre Blog</li>
            </ul>
        </div>
    </div>

    <!-- News Section -->
    <section class="news-section sp-two">
        <div class="container">

            <div class="row clearfix">

            @foreach ($articles as $article)
                <!--News Block-->
                <div class="news-block-one col-lg-4 col-md-6">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/news-1.jpg" alt="">
                            <div class="overlay">
                                <a class="link-btn" href="{{route('lirearticle', [$article->id])}}">
                                    <i class="fa fa-link"></i>
                                </a>                                
                            </div>
                        </div>
                        <div class="lower-box">
                            <div class="date">{{ $article->created_at->format('d') }}<span>{{ $article->created_at->format('m') }}</span></div>
                            <div class="post-meta">Par: <span> OFIS Team</span></div>
                            <h4><a href="{{route('lirearticle', [$article->id])}}">{{ $article->titre }}</a></h4>
                            <div class="text">{!!Str::words($article->content, 100)!!}... </div>
                            <div class="read-more-btn">
                                <a href="{{route('lirearticle', [$article->id])}}" class="read-more" >En lire plus </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

               
            </div>
            <ul class="page_pagination_two center mt-40">
            <li>{!! $articles->links() !!}</li>
            </ul>
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

<?php
include('../resources/views/footer.php');
?>
</body>
</html>