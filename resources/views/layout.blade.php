<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://use.fontawesome.com/e622492627.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Artevacation</title>
    <style>
    *{
      font-family: Helvetica;
    }
    body{
      height: 100%;
      width: 100%;
    }
    html{
      min-height: 100%;
    }
    .loginButton{
      background-color: orangered !important;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }
    .searchButton{
      background-color: 
    }
    #headerImage{
      background: url('new_header_web.jpeg') no-repeat center center fixed;
      background-size: cover;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      min-height: 200px !important;
      margin-top: 0px;
    }
    #highlight{
      vertical-align: text-top;
      padding: 0;
      height: 100%;
    }
    #navbarText ul li a{
      color: white;
    }
    .navbar-brand{
      padding-left: 10px;
      padding-bottom: 10px;
    }
    #navbar-bg{
      background: rgba(0, 0, 0, .6) !important;
    }
    .container img{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .container img p{
      text-align: center;
    }
    #jumbotron-text{
      padding-top: 50px;
      padding-bottom: 100px;
      padding-left: 10%;
      padding-right: 10%;
    }
    #connect-title{
      text-decoration: none;
      position: relative;
    }
    #connect-title:after{
      content: '';
      width: 30%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      bottom: -20px;
      border-width: 0 0 2px;
      border-style: solid;
    }
    #business-partner-title, #pelajari-lebih-title{
      text-decoration: none;
      position: relative;
    }
    #business-partner-title:after, #pelajari-lebih-title:after{
      text-align: center;
      content: '';
      width: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      bottom: -10px;
      border-width: 0 0 2px;
      border-style: solid;
    }
    #business-partner-section{
      background-color: #e9ecef;
    }
    .row{
      display: flex;
    }
    .joinPartnershipBtn{
      background-color: orangered !important;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
    }
    .figure-img .img-fluid{
      height: 100% !important;
    }
    #footerImage{
      display: block;
      margin-left: auto;
      margin-right: auto;
      max-width: 250px !important;
    }
    #pelajari-lebih-caption{
      font-size: 1em;
    }
    .nopadding{
      padding: 0 !important;
      margin: 0 !important;
    }
    figcaption{
      margin: 0 !important;
      color: white;
    }
    footer{
        background-color: #ffcc7d;
        color: white;
        width: 100%;
    }
    .fa{
        font-size: 40px;
        color: #f23934;
        letter-spacing: 10px;
    }
    #nav{
        background-image: url('ARTEVACATION_white.png') !important;
        background-size: cover;
        color: transparent;
    }
    .btn{
        background-color:#ffcc7d;
        width: 50px;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar-bg">
        <a class="navbar-brand" id="nav" href="/home">Artevacation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/partner">Business Partner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            </ul>
            <form class="form-inline mr-5" type="get" action="{{ url('/search') }}">
              <div class="md-form my-0">
                <button class="btn"><i class="fa fa-search text-white" aria-hidden="true" type="submit" style="font-size: 20px"></i></button>
                <input class="form-control" type="search" name="query" placeholder="Search" aria-label="Search">
              </div>
            </form>
            @if(Auth::check()){
              <button type="button" class="loginButton" onclick="window.location='{{ url("user/logout")}}'">
                Logout
              </button>
            }
            @else
              <button type="button" class="loginButton" onclick="location.href='login'">
                Login
              </button>
            @endif
        </div>
    </nav>
    @yield('container')
    <footer class="nopadding">
        <div class="container-fluid padding">
          <div class="container py-5">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="footerImage">
                  <img src="ARTEVACATION_black.png">
                </div>
                <figcaption class="text-center mt-3">Copyright ©2020 Artevacation All Rights Reserved</figcaption>
              </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="h5 text-center" id="connect-title">Connect with us:</div>
              <div class="text-center py-2">
                <a href="https://instagram.com/artevacation.co?igshid=1gzcjck69nr29"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>