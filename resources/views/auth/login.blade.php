<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Paper Kit by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="{{asset('backend/bootstrap3/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('backend/css/ct-paper.css')}}" rel="stylesheet"/>
        <link href="{{asset('backend/css/demo.css')}}" rel="stylesheet" /> 
        <link href="{{asset('backend/css/examples.css')}}" rel="stylesheet" /> 

        <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/css/landing-page.css')}}" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
      
</head>
<body>
        <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    
                    <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
                  </div>
           
                </div><!-- /.container-->
              </nav> 
    
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title">Login</h3>
                                <form class="register-form" method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div>
                                            <label>Email</label>
                                            <input id="email" type="email" 
                                            class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div>
                                            <label>Password</label>
                                            <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                            placeholder="password">

                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    

                                    <button type="submit" class="btn btn-danger btn-block">Login</button>
                                    <center>
                                            <p>You don't have an account yet?</p>
                                            <a href="{{route('register')}}">Create one</a>
                                    </center>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>     
           
        </div>
    </div>      

</body>


    {{-- backend --}}
    <script src="{{asset('backend/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/js/jquery-ui-1.10.4.custom.min.js')}}" type="text/javascript"></script>
    
    <script src="{{asset('backend/bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script>
    
    <!--  Plugins -->
    <script src="{{asset('backend/js/ct-paper-checkbox.js')}}"></script>
    <script src="{{asset('backend/js/ct-paper-radio.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('backend/js/ct-paper.js')}}"></script>
    
</html>