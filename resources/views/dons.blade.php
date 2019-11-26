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

{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
</head>
<body>
<div class="container">
        <div class="donate-form-area">
            <div class="section-title center">
                <h2>Donation Information</h2>
            </div>

            <h4>How much would you like to donate:</h4>
            {!! Form::open(['url' => './dons']) !!}
           
            @csrf
            <script>
            var montant=document.getElementById('donate-amount');
            </script>
           
                <ul class="chicklet-list clearfix">
                    <li>
                        <input type="radio" id="donate-amount-1" name="donate-amount" />
                        <label for="donate-amount-1" data-amount="1000" >1000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                        <label for="donate-amount-2" data-amount="2000"> 2000</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-3" name="donate-amount" />
                        <label for="donate-amount-3" data-amount="3000">3000 </label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-4" name="donate-amount" />
                        <label for="donate-amount-4" data-amount="4000">4000 </label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="5000">5000</label>
                    </li>
                    <li class="other-amount">

                        <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                            <span>Or</span><input type="number" id="other-amount" name="montant" placeholder="Other Amount"  />
                        </div>
                    </li>
                </ul>

                <h3>Informations du donneur</h3>

                <div class="form-bg">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                <p>Your Name*</p>
                                
                                <input type="text" name="nom" placeholder="">
                                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
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
                        <h4>Choisir son mode de payment</h4>
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

                <div class="center"><button class="theme-btn btn-style-one" type="submit" name="ok">Faire un don</button></div>
                    
            
                {!! Form::close() !!}
        </div>
    </div>
    

    <?php
include('../resources/views/footer.php');
?>
</body>
</html>