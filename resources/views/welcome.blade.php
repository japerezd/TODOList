<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>TODO List Web Page</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/css/landing-page.css')}}" rel="stylesheet"/> 

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

        <link href="{{asset('frontend/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

        <link rel="shortcut icon" href="/list.ico" type="image/x-icon">
        <link rel="icon" href="/list.ico">

<style>
   
    .navbar-top{
        /* background-color: #5eb7b7;     */
        background: rgba(44, 113, 147, 0.8);
    }
    .landing-page .navbar-top{
        position:fixed;
    }
</style>

    </head>
    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                <a href="{{route('welcome')}}">
                        <div class="logo-container">
                            <div class="logo">
                                <img src="{{asset('frontend/img/todolist.png')}}" alt="Creative Tim Logo">
                            </div>
                            <div class="brand">
                                TODO List
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="example" >
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <a href="{{route('login')}}">
                            <i class="login"></i>
                            Login
                            </a>
                        </li>
                        <li>
                        <a href="{{route('register')}}">
                            <i class="signup"></i>
                            Signup
                            </a>
                        </li>
                     
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{asset('frontend/img/template/bg3.jpg')}}">
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="phone" src="{{asset('frontend/img/task5.jpeg')}}" style="margin-top: 20px"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description">
                                <h2>Free up your mental space.</h2>
                                <br>
                                <h5>Regain clarity and calmness by getting all those tasks out of your head and onto your to-do list (no matter where you are or what device you use).</h5>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <h4 class="header-text">From overwhelmed to on top of it</h4>
                    <p>
                        TODO List gives you the confidence that everything’s organized and accounted for, so you can make progress on the things that are important to you.<br>
                    </p>
                  
                </div>
            </div>
            <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                                <h4 class="header-text">Focus your energy on the right things</h4>
                                <p>Easily organize and prioritize your tasks and projects so you’ll always know exactly what to work on next. </p>
                                <p>
                                    From business ventures to grocery lists, divide and conquer your daily tasks in shared projects.
                                </p> <br>

                                <p>
                                    TODO List helps busy people like you focus on what’s important. It helps millions of people save time for the things that really matter.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
                            <img src="{{asset('frontend/img/task1.jpeg')}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="{{asset('frontend/img/task2.jpeg')}}" alt="">
                                    </div>
                                    <div class="item active">
                                        <img src="{{asset('frontend/img/task3.jpeg')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('frontend/img/task4.jpeg')}}" alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators carousel-indicators-blue">
                                    <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                    <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h4 class="header-text">Start each day feeling calm and in control</h4>
                            <p>
                                Get a clear overview of everything on your plate and never lose track of an important task.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <h4 class="header-text text-center">Features</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-note2"></i>
                                </div>
                                <div class="text">
                                    <h4>Easy to manage your tasks</h4>
                                    <p>Break down tasks in simple steps, add due dates and define notices to track tasks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-note2"></i>
                                </div>
                                <h4>Smart Notifications on hands</h4>
                                <p>Automatic text and email reminders make sure customers always remember their upcoming appointments.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blue">
                                <div class="icon">
                                    <i class="pe-7s-note2"></i>
                                </div>
                                <h4>Know your business better now</h4>
                                <p>Take payments and run your business on the go, in your store and then see how it all adds up with analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-testimonial">
                <div class="container">
                    <h4 class="header-text text-center">What people think</h4>
                    <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="mask">
                                    <img src="{{asset('frontend/img/faces/face-4.jpg')}}">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Jay Z, Producer</p>
                                    <h3>"I absolutely love your app! It's truly amazing and looks awesome!"</h3>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="mask">
                                    <img src="{{asset('frontend/img/faces/face-3.jpg')}}">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Drake, Artist</p>
                                    <h3>"This is one of the most awesome apps I've ever seen! Wish you luck Creative Tim!"</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="mask">
                                    <img src="{{asset('frontend/img/faces/face-2.jpg')}}">
                                </div>
                                <div class="carousel-testimonial-caption">
                                    <p>Rick Ross, Musician</p>
                                    <h3>"Loving this! Just picked it up the other day. Thank you for the work you put into this."</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="{{asset('frontend/img/template/bg3.jpg')}}"/>
                    </div>
                    <div class="info">
                        <h1>The secret weapon of successful people</h1>
                        <p>Achieve peace of mind with TODO List.</p>
                        
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">

                    <div class="social-area pull-right">
                        <a class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a class="btn btn-social btn-twitter btn-simple">
                        <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social btn-pinterest btn-simple">
                        <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                    <div class="copyright">
                        &copy; 2019 <a href="https://github.com/PutinPD">Jorge Pérez</a>, made with love
                    </div>
                </div>
            </footer>
        </div>

    </body>
    <script src="{{asset('frontend/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/jquery-ui-1.10.4.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/awesome-landing-page.js')}}" type="text/javascript"></script>

</html>
