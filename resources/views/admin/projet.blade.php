<!DOCTYPE html>
<html lang="en">

<head>
<?php
include('../resources/views/admin/header.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
</head>

<body class="">
  <div class="wrapper ">
  <?php
include('../resources/views/admin/nav.php');
?>
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
                                       onclick="event.preventDefault();                                                   document.getElementById('logout-form').submit();">
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
                <h4 class="card-title"> Creation de projet</h4>
              </div>
              <div class="card-body">
              @if(!empty($successMsg))
            <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif
          
            <form action="{{ route('projetadmin') }}" method="POST" enctype="multipart/form-data">
@csrf
                @method('post')
                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
             <label for="titre">Titre</label>
              <input type="text" id="exampleForm2" name="titre"class="form-control">
              {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}

              
              <hr>
              <div style="color:#0066ff;text-align:center;" class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
              <label for="image"><i class="now-ui-icons arrows-1_cloud-download-93"></i><h5 > Ajouter image de couverture(cliquez)</h5></label>
              <input accept="image/gif, image/jpeg, image/png,image/jpg" type="file" name="image" id="image"  class="form-control">
              {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
              </div>
             <hr>

              <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
               <label for="description">Description</label>
               <textarea name="description" id="description" ></textarea>
               {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                    <script>
                    $('#description').summernote({
                        placeholder: 'La description du projet, ici',
                        tabsize: 2,
                        height: 100
                    });$('.dropdown-toggle').dropdown();</script>

<div class="form-group {!! $errors->has('montant') ? 'has-error' : '' !!}">
             <label for="montant_goal">Montant du projet</label>
              <input type="number" min="50000"  id="montant_goal" name="montant_goal" class="form-control">
              {!! $errors->first('montant', '<small class="help-block">:message</small>') !!}

<input type="submit" value="Créer !" class= "btn btn-info pull-right">

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
  <?php
include('../resources/views/admin/footer.php');
?>




</body>

</html>