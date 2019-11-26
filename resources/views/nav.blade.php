
<header class="main-header style-two">

        <!-- header top -->
        <div class="header-top dark">
            <div class="container-fluid">
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
        <div class="header-upper style-two">
            <div class="container-fluid clearfix">
                    
                <div class="float-left logo-outer">
                    <div class="logo"><a href="./home"><img src="../resources/images/petit-logo.png"  alt="" title=""></a></div>
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
                        <a href="./home" class="img-responsive"><img src="../resources/images/petit-logo.png" alt="" title=""></a>
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

</html>
