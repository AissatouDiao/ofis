<html lang="en">
<head>
    
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style type="text/css">
        
        .d-block{
            display: block;
        }
        .d-none{
            display: none;
        }

    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="comment-form" method="post" action="" >
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="" >
                        <div class="row" style="padding: 10px;">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Write something from your heart..!"></textarea>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 10px 0 10px;">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body comment-container" >
                    
                        <div class="well">
                            <i><b>  </b></i>&nbsp;&nbsp;
                            <span> </span>
                            <div style="margin-left:10px;">
                                <a style="cursor: pointer;" cid="" name_a="" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                <a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="" >Delete</a>
                                <div class="reply-form">
                                    
                                    <!-- Dynamic Reply form -->
                                    
                                </div>
                              
                                        <div class="well">
                                            <i><b>  </b></i>&nbsp;&nbsp;
                                            <span>  </span>
                                            <div style="margin-left:10px;">
                                                <a rname="" rid="" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
                                            </div>
                                            <div class="reply-to-reply-form">
                                    
                                                <!-- Dynamic Reply form -->
                                                
                                            </div>
                                            
                                        </div>
                                
                          
                                
                            </div>
                        </div>
                

                </div>
            </div>
        </div>
    </div>

   

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">
  
</script>
</body>
</html>



