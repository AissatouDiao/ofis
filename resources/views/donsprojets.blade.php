<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>ChariteMax HTML Template</title> 

<!-- Stylesheets -->
<link href="/sass/bootstrap.css" rel="stylesheet">
<link href="/sass/style.css" rel="stylesheet">
<link href="/sass/responsive.css" rel="stylesheet">
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
<header class="main-header">

<!-- header top -->
<div class="header-top dark">
    <div class="container-fluid">
        <div class="outer-box">
            <!--Top Left-->
            <div class="top-left">
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
            </div>

            <!--Top Right-->
            <div class="top-right">
                
                <div class="social-links clearfix">
                <a href="https://www.facebook.com/ofisdusenegal"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/ofisdusenegal"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/ofisdusenegal"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/ofisdusenegal"><i class="fab fa-linkedin-in"></i></a>
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

<div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h4>How much would you like to donate:</h4>
            @if(!empty($successMsg))
            <div class="alert alert-info"> {{ $successMsg }}</div>
            @endif

            <form action="{{route('donsprojetproposition', [$id])}}" method="post" enctype="multipart/form-data">
           @csrf
                 <?php var_dump($id);
                 $nombre=(int)$id;
                 ?>
                <h3>Informations du donneur</h3>

                <div class="form-bg">
                    <div class="row clearfix">

                        

                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('montant') ? 'has-error' : '' !!}">
                                <p>Montant</p>
                                <input type="text" name="montant" placeholder="">
                                {!! $errors->first('montant', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                <p>Your Name*</p>
                                <input type="text" name="nom" placeholder="">
                                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                                <p>Prenom*</p>
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
                                <p>Address*</p>
                                <input type="text" name="adresse" placeholder="">
                                {!! $errors->first('adresse', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                                <p>Phn Num*</p>
                                <input type="text" name="telephone" placeholder="">
                                {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
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
                    
            
                {!! Form::close() !!}
        </div>
    </div>
    

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
</body>
</html>