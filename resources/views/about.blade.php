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
    #about-us-title, #vision-mission-title{
      text-decoration: none;
      position: relative;
    }
    #about-us-title:after, #vision-mission-title:after{
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
      padding-top: 5rem;
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
    #vision-mission-background-1{
        color: whitesmoke;
        width: 100%;
        background: url('background-vision-mission-1.jpg') no-repeat center center;
        height: 800px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }
    #business-process-background{
        background: url('background-vision-mission-2.jpg') no-repeat center center;
        height: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }
    #checklist-icon{
        width: 100%;
        font-size: 120px;
        margin: 0 auto;
        text-align: center !important;
    }
    .paragraph{
        font-size: 18px;
    }
  </style>
  </head>
  <body>
    @section('container')
    <div class="container-fluid" id="business-partner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="h3 text-center py-5" id="about-us-title">
                        Tentang Kami
                    </div>
                </div>
            </div>
        <div class="jumbotron mt-0 mb-0 pb-0">
            <div class="container">
              <img src="ARTEVACATION_black.png" alt="Artevacation Logo">
              <div class="container" id="jumbotron-text">
                <p class="text-center">Artevacation adalah Web/Aplikasi yang memudahkan masyarakat untuk lebih mengenal pengetahuan sejarah. Tempat wisata bersejarah, game bercerita sejarah dan juga pusat belanja artefak tanpa melupakan unsur sejarah dan budaya yang ada di Indonesia</p>
              </div>
            </div>
        </div>
        </div>
        <div class="container mb-5" id="vision-mission-background-1">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="h2 text-center py-5" id="vision-mission-title">
                        Visi & Misi
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 py-5 px-auto">
                    <h3 class="text-center pl-4 py-5">Visi</h3>
                </div>
                <div class="col-md-8 py-5 px-2">
                    <div class="vision-paragraph">
                        <p class="paragraph">1. Dapat meningkatkan wawasan sejarah Indonesia</p>
                        <p class="paragraph">2. Menjadikan eksplorasi dan pembelajaran sejarah lebih menyenangkan dengan teknologi</p>
                        <p class="paragraph">3. Mempermudah dalam mempelajari dan mengeksplorasi sejarah Indonesia seperti wisata sejarah dan pembelajaran sejarah</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-xl-5">
                <div class="col-md-7 my-auto px-auto" id="mission">
                    <div class="vision-paragraph py-xl-5 py-md-2 px-2">
                        <p class="paragraph">1. Memberikan kenyamanan dan kemudahan bagi pengguna</p>
                        <p class="paragraph">2. Memberikan informasi yang akurat kepada pengguna</p>
                        <p class="paragraph">3. Memberikan pelayanan yang maksimal serta meningkatkan wawasan sejarah Indonesia dengan mudah dan menyenangkan</p>
                    </div>
                </div>
                <div class="col-md-5 my-auto pt-xl-2 pt-md-2 px-5">
                    <h3 class="text-center pl-5 py-5">Misi</h3>
                </div>
            </div>
        </div>
        <div class="container mb-5" id="detailed-purpose-background">
            <div class="row px-5 py-5">
                <div class="col-md-6">
                    <div class="vision-column">
                        <div class="fa fa-check text-center" id="checklist-icon"></div>
                        <p class="text-center">Menjadi sarana dalam meningkatkan wawasan sejarah untuk masyarakat Indonesia</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vision-column">
                        <div class="fa fa-check text-center" id="checklist-icon"></div>
                        <p class="text-center">Memiliki fitur yang mudah digunakan dan menyenangkan dalam mengeksplorasi sejarah Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-6 offset-md-3">
                    <div class="vision-column">
                        <div class="fa fa-check text-center" id="checklist-icon"></div>
                        <p class="text-center">Berbagai macam fitur dalam satu aplikasi untuk belajar, eksplorasi dan berbelanja hal-hal yang bersangkutan dengan sejarah dan budaya Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5" id="business-process-background">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="h3 text-center py-5" id="about-us-title">
                        Business Process
                    </div>
                </div>
            </div>
            <div class="row px-5 py-5">
                <div class="col-md-6 pl-5">
                    <div class="vision-column">
                        <div class="h3 text-center py-5" id="about-us-title">
                            Understand
                        </div>
                        <p class="text-center">Melihat permasalahan di Indonesia yang mulai kehilangan rasa keingintahuan dan pembelajaran mengenai sejarah dan budaya di Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="row px-5 py-5">
                <div class="col-md-6 offset-md-6">
                    <div class="vision-column">
                        <div class="h3 text-center py-5" id="about-us-title">
                            Observe
                        </div>
                        <p class="text-center">Dilihat lebih dalam, remaja Indonesia lebih tertarik dengan budaya asing dan sulitnya mendapatkan informasi yang menarik mengenai sejarah dan budaya Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="row px-5 py-5">
                <div class="col-md-6 pl-5">
                    <div class="vision-column">
                        <div class="h3 text-center py-5" id="about-us-title">
                            Define
                        </div>
                        <p class="text-center">Dari permasalahan tersebut, kami berpikir untuk membuat sebuah platform untuk menarik masyarakat Indonesia untuk mengeksplorasi tentang sejarah dan budaya Indonesia dan mempermudah masyarakat untuk mendapatkan informasi tersebut</p>
                    </div>
                </div>
            </div>
            <div class="row px-5 py-5">
                <div class="col-md-6 offset-md-6">
                    <div class="vision-column">
                        <div class="h3 text-center py-5" id="about-us-title">
                            Idea
                        </div>
                        <p class="text-center">Terlahirnya Artevacation yang merupakan sebuah platform yang kami percaya dapat memudahkan masyarakat Indonesia untuk mendapatkan informasi yang menarik mengenai sejarah dan budaya Indonesia, memudahkan masyarakat untuk mengeksplorasi tempat wisata dan kerajinan serta artefak sejarah dan budaya Indonesia dengan fitur gamifikasi yang dapat menarik perhatian masyarakat Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
  </body>
</html>