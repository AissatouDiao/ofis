<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>OFIS assainissement</title> 

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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #0099cc;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>

<body>
  
            
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div> 
    <!-- main header -->
   


    <div class="col-md-6">


    <ul>
    <li  class="current"><a href="{{url('myp')}}">Ecrire projet</a></li>
  <li><a href="{{url('home')}}">Accueil</a></li>
  <li><a href="{{url('blog')}}">Blog</a></li>
  <li><a href="{{url('aboutus')}}">A propos de nous</a></li>
  <li><a href="{{url('contact')}}">Contact</a></li>
  
</ul>
</div>
<div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Création de votre projet</h4>
              </div>
              <div class="card-body">
              @if(!empty($successMsg))
            <div class="alert alert-info"> {{ $successMsg }}</div>
            @endif
          
            <form action="{{ route('projetuser') }}" method="POST" enctype="multipart/form-data">
@csrf
                @method('post')
                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
             <label for="titre">Titre du projet</label>
              <input type="text" id="exampleForm2" name="titre"class="form-control">
              {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}

              
              <hr>
              <div  class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
              <label for="image">Photo de couverture du projet</label>
              <input accept="image/gif, image/jpeg, image/png,image/jpg" type="file" name="image" id="image"  class="form-control">
              {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
              </div>
             <hr>

              <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
               <label for="description">Redaction du projet</label>
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
    </section>
                       
                 
         
    
          

    



    

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