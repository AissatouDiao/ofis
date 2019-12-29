<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OFIS assainissement</title>

<!-- Stylesheets -->

<link href="/sass/bootstrap.css" rel="stylesheet">
<link href="/sass/style.css" rel="stylesheet">
<link href="/sass/responsive.css" rel="stylesheet">
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
                            <li ><a href="{{ url('projets' )}}">Nos projets</a></li>
                            <li class="current"><a href="{{ url('blog') }}">Blog</a></li>
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
                            <li class="current"><a href="{{ url('blog') }}">Blog</a></li>
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


    <!--Page title-->
    <section class="page-title" style="background-image:url(/images/backblog.jpg)">
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
                               
                            </div>
                            <div class="lower-box">
                                <div class="top-content">
                                    <div class="date">05 <span>JULY</span></div>
                                    <h4><a href="blog-details.html">{!! $articles->titre!!}</a></h4>
                                    <ul class="post-meta">
                                        <li><span class="far fa-user"></span>By: OFIS Team</li>
                                        <li><span class="far fa-comment"></span>Comment {{$articles->comments->count()}}</li>
                                    
                                        
                                    </ul>
                                    <div class="text mb-30">{!! $articles->content !!}</div>
                                </div>
                                 
                                
                                <div class="text"></div>
                            </div>

                        </div>
                    </div>

              
                




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script> 

jQuery(document).ready(function() {
  jQuery('.dropdate').on('click', function(event) {
    jQuery(this).closest('.content').find('.cdropdate').toggle();
  });
});
</script>
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
                               
                                <div class="comment-inner clearfix">
                                    <div class="comment-info clearfix"><strong>{{$commentaire->nom}}. </strong></div>
                                    <div class="text">{{$commentaire->commentaire}}</div>
                                    <div class="comment-time">{{$commentaire->created_at->diffForHumans()}} 

                                       <div class='content'>
                                         <div class="dropdate" style="cursor:pointer;">reply</div>
                                                <div class="cdropdate defhide">
                                                    <form method="post" action="{{route('reponse', [$commentaire->id])}}">
                                                       @csrf
                                                       @method('post')
                                                        <div class="row clearfix">
                                                               <input type="hidden" name="comment_id" value="$commentaire->id">
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
                                                                    <textarea name="reply" placeholder="reponse"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                       </div>        
                                   </div>
                                   
                                     @foreach ($commentaire->replies as $reply)
                                        <div class="comment-inner clearfix" style="padding:30px;">
                                        <div class="comment-info clearfix"><strong>{{$reply->nom}}. </strong></div>
                                        <div class="text">{{$reply->reply}}</div>
                                        <div class="comment-time">{{$reply->created_at->diffForHumans()}} </div>
                                        </div>
                                     @endforeach
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
                        
                       
                        <!--Popular Posts-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Articles récents</h4>
                                <div class="separator">
                                </div>
                            </div>
                             
                            @foreach($articles->orderBy('id', 'desc')->take(3)->get() as $article)
                            <article class="post">
                            
                                <div class="text"><a href="blog-details.html">{{$article->titre}}</a></div>
                                <div class="post-info">{{$article->created_at}}</div>
                            </article>
                @endforeach
                            
                        </div>
                      
                        
                        <!-- Feature cause -->
                        <div class="sidebar-widget cause-widget">
                            <div class="sidebar-title">
                                <h4>Featured Cause</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <div class="inner-box">
                            @foreach($projets as $projet)
                               <figure class="image">
                                    <img src="../{{$projet->image}}" style="width:360px;height:280;" alt="">
                                    <div class="overlay"><a href="{{route('donsprojetproposition', [$projet->id])}}" class="theme-btn btn-style-two donate-box-btn">faire un don</a>
                                    </div>
                               </figure>
                           
                            
                             <div class="text"><a href="{{route('lireleprojet', [$projet->id])}}">{{$projet->titre}}</a></div>
                                <div class="lower-content">
                                    <h4>{!! $projet->titre!!}</h4>
                                    <div class="text mb-30">{!!Str::words($projet->description, 20)!!}... </div>

                                    
                                       <?php
                                        $MT=$projet->montant_goal;
                                        $MR=$projet->donsprojets->sum('montant');
                                        $pourcentage=($MR*100)/$MT;
                                        ?>
                                    <!--Progress Levels-->
                                    <div class="progress-levels">     
                                        <!--Skill Box-->
                                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="inner">
                                                <div class="bar">
                                                    <div class="bar-innner"><div class="bar-fill" style="padding:5px;" data-percent="{{round($pourcentage)}}"><div class="percent"></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="donate clearfix">
                                        <div class="float-left">
                                            <span>{{$projet->donsprojets->sum('montant')}} FCFA </span>
                                        </div>
                                        <div class="float-right">
                                        {{$projet->montant_goal}} FCFA
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                           
                        


                        <!-- Contact Info -->
                        <div class="sidebar-widget contact-info-widget">
                            <div class="sidebar-title">
                                <h4>Contactez nous</h4>
                                <div class="separator">
                                </div>
                            </div>
                            <ul class="contact-info-list">
                                <li><span class="fas fa-map-marker-alt"></span><b>Addresse</b>Dakar, Senegal</li>
                                <li><span class="fa fa fa-envelope-open"></span><b>Email</b>ofissenegal@gmailcom</li>
                                <li><span class="fa fa-phone"></span><b>Telephone/ Fax</b>+221 77 436 66 84 </li>
                            </ul>
                        </div>

                        <!-- end widget -->
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>

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
                                            <a href="index.html"><img src="/images/petit-logo.png" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Suivez nous aussi à travers les réseaux sociaux...</div>
                                        <ul class="social-icon-three">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
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
<script src="/js1/jquery.js"></script>
<script src="/js1/popover.js"></script>
<script src="/js1/bootstrap.min.js"></script>

<script src="/js1/wow.js"></script>
<script src="/js1/owl.js"></script>
<script src="/js1/validate.js"></script>
<script src="/js1/mixitup.js"></script>
<script src="/js1/isotope.js"></script>
<script src="/js1/appear.js"></script>
<script src="/js1/jquery.fancybox.js"></script>

<script src="/js1/script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js1/main.js') }}">

</body>
</html>
