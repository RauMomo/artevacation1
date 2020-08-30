@extends('layout')
<!DOCTYPE html>
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
          min-height: 300px !important;
          padding: 10px;
          box-sizing: border-box;
          resize: horizontal;
          border: 1px dashed;
          max-width: 100%;
          height: calc(100vh - 16px);
        }
        #headerImageWrapper{
          padding-top: 56.25%;
          background: url('new_header_web.jpeg') no-repeat center center fixed;
          background-attachment: scroll;
          background-size: cover;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          max-height: 200px !important;
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
        #pelajari-lebih-section{
          background-color: #e9ecef;
        }
        #business-partner-section{
          background-color: #e9ecef;
        }
        #business-partner{
          background-color: #FFCB7C;
          color: white;
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
        .link{
          text-decoration: none;
          color: black;
        }
        .link:hover{
          color: orangered;
          text-decoration: none;
        }
        figcaption{
          margin: 0 !important;
        }
        footer{
          background-color: #ffcc7d;
        }
        #jumbotron-container{
          position: absolute;
          padding: 2em;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
        }
        .card{
          background: rgba(248, 131, 121, .8) !important;
        }
        .form-control{
          width: 100%;
        }
        .fixed-footer{
          padding-bottom: 25%;
          max-height: 200px;
        }
      </style>
      </head> 
      <body>
        @section('container')
        <div class="pt-5 mt-5"></div>
        @if (!$all->count() )
          <div class="container-fluid fixed-footer">
            <h5 class="text-left">No Results Found</h5>
          </div>
        @else
          <div class="container-fluid">
            <h5 class="text-left">{{$all->count()}} Results Found</h5>
          </div>
          <div class="container-fluid fixed-footer">
            @foreach($all as $article)
            <div class="row">
                <div class="col-md-4"><a href="article/{{ $article->id }}">{{ $article->title }}</a></div>
                <div class="col-md-4">{{ $article->location }}</div>
                <div class="col-md-4">{{ $article->author }}</div>
            </div>
            @endforeach
          </div>
        @endif
        @endsection
      </body>
</html>