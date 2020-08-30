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
    .call-to-action{
      text-decoration: none;
      color: white;
    }
    .call-to-action:hover{
      text-decoration: none;
      color: white;
    }
  </style>
  </head> 
  <div class="jumbotron-fluid" id="headerImageWrapper">
      <!--<div class="container justify-content-center" id="jumbotron-container">
        <div class="card">
          <div class="card-body px-5">
            <h4 class="display-6">Find anything:</h4>
            <div class="row py-2">
            <div class="d-inline-block col-md-2">
              <button class="btn btn-secondary dropdown-toggle px-5" type="button" id="dropdown_coins" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                Coin
              </button>
            </div>
            <div class="d-inline-block col-md-10">
              <input class="form-control" placeholder="Enter something">
            </div>
            </div>
          </div>
        </div>
      </div>
      -->
  </div>
  <body>
  @section('container')
  <div class="jumbotron mt-0 mb-0 pb-0">
    <div class="container">
      <img src="ARTEVACATION_black.png" alt="Artevacation Logo">
      <div class="container" id="jumbotron-text">
        <p class="text-center">Artevacation adalah Web/Aplikasi yang memudahkan masyarakat untuk lebih mengenal pengetahuan sejarah, tempat wisata & sejarah, game bercerita sejarah dan juga pusat belanja artefak tanpa melupakan unsur sejarah yang ada di Indonesia</p>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="pelajari-lebih-section">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="h3 text-center py-5" id="pelajari-lebih-title">
          Pelajari lebih
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-xs-12 col-sm-6 col-md-6 py-3">
        <div class="h3 text-center" id="pelajari-lebih-picture">
          <figure class="figure">
            <img class="figure-img img-fluid" src="ARTEVACATION_black.png">
          </figure>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 py-3">
        <div class="h3 text-center py-5" id="pelajari-lebih-article-title">
          <a class="link" href="/article/2">Sejarah dari Masjid Al-Barkah</a>
          <hr>
        </div>
        <div class="h6 text-center" id="pelajari-lebih-caption">
          Masjid Agung Al-Barkah Bekasi adalah sebuah masjid yang ada di Bekasi. Masjid ini merupakan salah satu masjid tua di Indonesia. Masjid agung yang dibangun tahun 1890 dipelopori H. Abd. Hamid (Alm) penghulu Lanraad saat itu, diatas tanah wakaf Bapak Bachroem (Alm) seluas 3370m² terletak di Alun-Alun Kota Bekasi (sekarang bernama Jalan Veteran).
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-xs-12 col-sm-6 col-md-6 py-3">
        <div class="h3 text-center py-5" id="pelajari-lebih-article-title">
          <a class="link" href="/article/3">Sejarah dari Museum Fatahillah</a>
          <hr>
        </div>
        <div class="h6 text-center" id="pelajari-lebih-caption">
          Museum Fatahillah memiliki nama resmi. Museum Sejarah Jakarta adalah sebuah museum yang terletak di Jalan Taman Fatahillah No. 1, Jakarta Barat dengan luas lebih dari 1.300 meter persegi. Bangunan ini dahulu merupakan balai kota Batavia (bahasa Belanda: Stadhuis van Batavia) yang dibangun pada tahun 1707-1712 atas perintah Gubernur-Jendral Joan van Hoorn. 
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 py-3">
        <div class="h3 text-center" id="pelajari-lebih-picture">
          <figure class="figure">
            <img class="figure-img img-fluid" src="ARTEVACATION_black.png">
          </figure>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-xs-12 col-sm-6 col-md-6 py-3">
        <div class="h3 text-center" id="pelajari-lebih-picture">
          <figure class="figure">
            <img class="figure-img img-fluid" src="ARTEVACATION_black.png">
          </figure>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 py-3 mb-5">
        <div class="h3 text-center py-5" id="pelajari-lebih-article-title">
            <a class="link" href="/article/1">Sejarah dari Monumen Nasional</a>
          <hr>
        </div>
        <div class="h6 text-center" id="pelajari-lebih-caption">
            Monumen Nasional atau yang populer disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda.
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="container-fluid" id="business-partner-section">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="h3 text-center py-5" id="business-partner-title">
          Partner Bisnis Kami
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img1">
        </div>
      </div>
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img2">
        </div>
      </div>
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img3">
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img4">
        </div>
      </div>
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img5">
        </div>
      </div>
      <div class="col px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img6">
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-xs-12 col-sm-6 col-md-4 px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img7">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img8">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 px-2">
        <div class="px-2 py-5">
          <img src="ARTEVACATION_black.png" alt="img9">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-3 mb-5" id="business-partner">
    <div class="row">
      <div class="col text-center">
        <div class="py-5">
          <div class="h3">Ingin bergabung dengan Artevacation?</div>
          <p>Segera daftarkan tempat anda di artevacation dan rasakan manfaatnya untuk tempat anda!</p>
          <button class="joinPartnershipBtn my-3"><a class="call-to-action" href="/partner">Daftarkan Tempat Anda</a></button>
        </div>
      </div>
    </div>
  </div>
  @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>