@extends('layout')

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
    #headerImageWrapper{
      width: 100%;
      padding-bottom: 25%;
      background: url('u146.svg') no-repeat center center;
      max-height: 300px;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
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
      padding-top: 50px;
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
    #submitBtn{
        background-color: orange !important;
        color: white;
        width: 100%;
        box-sizing: border-box;
        border: 2px solid grey;
        padding-block-start: 10px;
        padding-block-end: 10px;
    }
    figcaption{
      margin: 0 !important;
    }
    footer{
      background-color: #ffcc7d;
    }
    .img-small-right{
      float: right;
      margin-left: 20px !important;
      width: 30% !important;
    }
    .img-small-left{
      float: left;
      margin: 20px !important;
      border: transparent;
      width: 35% !important;
    }
    #form-box{
        border: 2px solid orange;
    }
    input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
  </style>
  </head>
  <body>
    @section('container')
    <div class="container-fluid" id="business-partner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="h3 text-center py-5" id="business-partner-title">
                        Gabung Partner Bisnis Kami
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ url('/partner') }}">
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
        <div class="container py-5 mb-5" id="form-box">
            <div class="row px-2">
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleRetypePassword" placeholder="First Name">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleRetypePassword" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="row px-2">
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleRetypePassword" placeholder="Email">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control" id="exampleRetypePassword" placeholder="Phone Number">
                    </div>
                </div>
            </div>
            <div class="row px-2">
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">Company Name</label>
                        <input type="text" name="company_name" class="form-control" id="exampleRetypePassword" placeholder="Company Name">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group py-2">
                        <label for="exampleInputPassword1">Website</label>
                        <input type="text" name="website" class="form-control" formnovalidate="formnovalidate" placeholder="Website">
                    </div>
                </div>
            </div>
            <div class="row px-2">
                <div class="col-md-12">
                    <button type="submit" class="btn mt-3 mb-5" id="submitBtn">Get In Touch</button>
                </div>
            </div>
        </form>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  </html>