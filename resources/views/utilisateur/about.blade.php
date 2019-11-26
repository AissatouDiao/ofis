<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ChariteMax HTML Template</title>

<!-- Stylesheets -->
<?php
include('../resources/views/header.php');
?>

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
    include('../resources/views/navv.blade.php');
    
    ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>

    <div class="bread-crumb">
        <div class="container">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fa fa-home"></span>Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>

    <!-- About Us -->
    <section class="about-us-two sp-four">
        <div class="container">
            <!-- about block -->
            <div class="about-block-two">
                <div class="inner-box">
                    <h4>A Charity with Believe in Help <span></span></h4>
                    <h1>Impact of <span class="theme-color">ChariteMAX</span></h1>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboret dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                    <div class="author">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/author-2.jpg" alt=""></div>
                            <h5>Daniel Ricardo</h5>
                            <div class="sign"><img src="images/resource/sign.png" alt=""></div>
                        </div>
                            
                        
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

    <!-- Disaster response -->
    <section class="disaster-response sp-two" style="background-image: url(images/background/3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image mb-30"><img src="images/resource/feature-4.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="text-block-one">
                        <h4>Fundrising for Goodness</h4>
                        <h1>Quick Disaster Response</h1>
                        <div class="text">Sed do eiusmod tempor incididunt ut laboret dolore magna aliqua enim nost dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla aliquip consequat duis aute irure dolor in reprehenderit. </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-twelve">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section sp-two">
        <div class="container">
            <div class="row">
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-heart-box"></span></div>
                        <h4><a href="#">Get Inspired & Give</a></h4>
                        <div class="text">Puis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-button"></span></div>
                        <h4><a href="#">Easier Donations</a></h4>
                        <div class="text">Auis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute. </div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- services block -->
                <div class="services-block-one col-lg-4 col-md-6">
                    <div class="inner-box hvr-float-shadow">
                        <div class="icon"><span class="flaticon-donation"></span></div>
                        <h4><a href="#">Help the Needed</a></h4>
                        <div class="text">Cuis nostrud exercitation ullamco laboris nisi utm aliquip sed duis aute.</div>
                        <div class="read-more">
                            <a href="#"><span class="flaticon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!-- end -->
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="our-team sp-five">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="icon-box"><img src="images/icons/sec-title.png" alt=""></div>
                <h1>Volunteers <span>Team</span></h1>
                <div class="text">Orphan children are at high risk of severe malnutrition & no education </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
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

    <!-- Feature section -->
    <section class="feature-section">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="images/resource/feature-1.jpg" alt=""></div>
                        <div class="overlay-content">
                            <h5>Food & Water</h5>
                            <h4>Benefitting over 800,000 children every year through welfare projects </h4>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="images/resource/feature-2.jpg" alt=""></div>
                        <div class="overlay-content">
                            <h5>Get Quick Donations</h5>
                            <h4>Deploy best possible methodology and technology for achieving ideal</h4>
                        </div>
                    </div>
                </div>
                <div class="feature-block col-xl-4 col-lg-6">
                    <div class="inner-box">
                        <div class="image"><img src="images/resource/feature-3.jpg" alt=""></div>
                        <div class="overlay-content">
                            <h5>Real Approach</h5> 
                            <h4>We help donors make safe and easy donations to local organizations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax section -->
    <section class="parallax-section style-two" style="background-image: url(images/background/3.jpg)">
        <div class="container">
            <h1>We help thousands of children, <br>arrange food & build houses for them</h1>
            <h3>Join us & Become a Volunteer <span class="border-shape"></span></h3>
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