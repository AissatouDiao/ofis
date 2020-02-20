<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets-admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets-admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  OFIS admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/now-ui-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
</head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        
        <a href="./home" class="simple-text logo-normal">
         Acces OFIS plateforme <i class="now-ui-icons gestures_tap-01"></i>
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="{{ url('admin' )}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="{{ url('fin' )}}">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Financement</p>
            </a>
          </li>
          <li>
            <a href="{{url('gestionprojetsB')}}">
              <i class="now-ui-icons files_paper"></i>
              <p>Projets beneficaires</p>
            </a>
          </li>
         
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons files_single-copy-04"></i>Blog
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./blogadmin">Nouveau article</a>
                  <a class="dropdown-item" href="./articles">Les artcles</a>
                  
                </div>
                </a>
              
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons design-2_ruler-pencil"></i>Projets
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('projet' )}}">Nouveau projet</a>
                  <a class="dropdown-item" href="{{ url('gestionprojets' )}}">Les projets</a>
                  
                </div>
                </a>
              
              </li>
          <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons ui-2_chat-round"></i>
              <p>Messages des visiteurs</p>
            </a>
          </li>
          
   
          <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Les projets</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> 
{!! $projets->titre !!}</h4>
              </div>
              <div class="card-body">

              @if(!empty($successMsg))
            <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif

            <form action="{{route('donationad', [$id])}}" method="post" enctype="multipart/form-data">
           
           @csrf

           <script>
           var montant=document.getElementById('donate-amount');
           </script>

               <?php
                $nombre=(int)$id;
                ?>
       
       @if(!empty($successMsg))
           <div class="alert alert-info"> {{ $successMsg }}</div>
           @endif
               <h3>Informations du donneur</h3>

               <div class="form-bg">
                   <div class="row clearfix">

                       

                       <input type="hidden" name="projet_id" value="$nombre">
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
                               <input type="tel" name="telephone" placeholder="">
                               {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                           </div>
                       </div> 
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group {!! $errors->has('montant') ? 'has-error' : '' !!}">
                               <p>Montant de la donation*</p>
                               <input type='currency' name="montant"  placeholder="">
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
          </div>
        </div>
      </div>

     
      
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>


  <script>
    var currencyInput = document.querySelector('input[type="currency"]');
var currency = 'XOF'; // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

currencyInput.addEventListener('focus', onFocus);
currencyInput.addEventListener('blur', onBlur);

function localStringToNumber( s ){
    return Number(String(s).replace(/[^0-9.-]+/g,""));
}

function onFocus(e){
  var value = e.target.value;
  e.target.value = value ? localStringToNumber(value) : '';
}

function onBlur(e){
  var value = e.target.value;

  const options = {
      maximumFractionDigits : 2,
      currency              : currency,
      style                 : "currency",
      currencyDisplay       : "symbol"
  }
  
  e.target.value = value 
    ? localStringToNumber(value).toLocaleString(undefined, options)
    : ''
}
</script>
  <script src="/js/jquery.js"></script>
<script src="/js/popover.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/wow.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/validate.js"></script>
<script src="./js/mixitup.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/jquery.fancybox.js"></script>

<script src="/js/script.js"></script>

</body>

</html>