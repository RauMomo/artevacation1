@extends('layout')

<!doctype html>
<html>
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
        .loginButton{
          background-color: orangered !important;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }
        #headerImage{
          background: url('images.jpg') no-repeat center center fixed;
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
        #business-partner-title, #pelajari-lebih-title{
          text-decoration: none;
          position: relative;
        }
        #business-partner-title:after, #pelajari-lebih-title:after{
          content: '';
          width: 50%;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          bottom: -20px;
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
        }
        footer{
          background-color: #ffcc7d;
        }
        .fa{
            font-size: 40px;
            color: #f23934;
            letter-spacing: 10px;
        }
        .vertical-line{
            border-left: solid 2px orange;
            padding-left: 10px;
            margin-top: 20px;
        }
        #submitBtn{
            background-color: orangered !important;
            color: white;
        }
      </style>
      </head>
<body class="pt-5 mt-5">
    <div class="container-fluid">
        <div class="login-title pb-3">
            <h3>Login</h3>
        </div>
    <form method="post" action="{{ url('/user/checkLogin') }}">
        {{ csrf_field() }}
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>    
        @endif
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="col col-md-6 pt-2">
                <div class="container fixed">
                    <div class="vertical-line">
                        <label>Doesn't have account?</label><br>
                        <a href="/signup">Sign Up here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6">
                <div class="form-group py-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="form-check py-2">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn mt-3 mb-5" id="submitBtn">Submit</button>
    </form>
    </div>
</body>
</html>

