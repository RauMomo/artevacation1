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
    #blog-title{
      text-decoration: none;
      position: relative;
    }
    #blog-title:after{
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
    .caption-grey{
        font-size: 12px;
        color: grey;
    }
    .img{
        background: url('masjid_al_barkah_rev.jpg') no-repeat center center;
        width: 100%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        position: relative;
    }
    .img2{
        background: url('monas_rev.jpg') no-repeat center top;
        background-size: auto 200%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        position: relative;
    }
    .img3{
        background: url('museum_fatahillah_rev.jpg') no-repeat center center;
        background-size: auto 200%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        position: relative;
    }
    .read-more{
        text-decoration: none;
        color: black;
    }
    .read-more:hover{
        text-decoration: none;
        color: black;
    }
  </style>
  </head>
  <body>
  @section('container')
  <div class="container-fluid">
  <div class="container py-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="h3 text-center py-5" id="blog-title">
                Blog
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-8">
            <div class="caption-grey">Posted on 20 July 2020</div>
            <h3 class="h5 text-left pb-3">Sejarah dari Masjid Al-Barkah</h3>
            <div class="img"></div>
            <p class="pt-3 text-truncate">Masjid Agung Al-Barkah Bekasi adalah sebuah masjid yang ada di Bekasi. Masjid ini merupakan salah satu masjid tua di Indonesia. Masjid agung yang dibangun tahun 1890 dipelopori H. Abd. Hamid (Alm) penghulu Lanraad saat itu, diatas tanah wakaf Bapak Bachroem (Alm) seluas 3370m² terletak di Alun-Alun Kota Bekasi (sekarang bernama Jalan Veteran). Masjid ini telah mengalami beberapa kali renovasi. Pada tahun 1969 direnovasi total menjadi masjid oleh Bupati Bapak MS. subandi (Alm). Renovasi pertama ketika kota Bekasi menjadi tuan rumah MTQ Jawa Barat 1988, kemudian tahun 1997 lalu direnovasi lagi pada 2002. Sampai kemudian menjadi bentuknya yang semegah dan semewah sekarang ini setelah melalui renovasi total tahun 2004-2008 yang diprakarsai oleh Walikota Bekasi H. Achmad Zurfaih (Alm)</p>
            <a class="read-more py-2" href="article/2"><strong>Read more</strong></a>
            <hr style="border: 1.5px solid black">
        </div>
        <div class="col-md-4">
            <h3 class="h5 text-left pb-2">Latest Blog</h3>
            <hr style="border: 1.5px solid black">
            <h6 class="text-left pt-2"><a class="read-more" href="article/2">Sejarah dari Masjid Al-Barkah</a>
            <hr style="border: 1.5px solid black">
            <h6 class="text-left pt-2"><a class="read-more" href="article/2">Sejarah dari Monumen Nasional</a>
            <hr style="border: 1.5px solid black">
            <h6 class="text-left pt-2"><a class="read-more" href="article/2">Sejarah dari Museum Fatahillah</a>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-8">
            <div class="caption-grey">Posted on 20 July 2020</div>
            <h3 class="h5 text-left pb-3">Sejarah dari Monumen Nasional</h3>
            <div class="img2"></div>
            <p class="pt-3 text-truncate">Monumen Nasional atau yang populer disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda. Pembangunan monumen ini dimulai pada tanggal 17 Agustus 1961 di bawah perintah presiden Sukarno dan dibuka untuk umum pada tanggal 12 Juli 1975. Tugu ini dimahkotai lidah api yang dilapisi lembaran emas yang melambangkan semangat perjuangan yang menyala-nyala. Monumen Nasional terletak tepat di tengah Lapangan Medan Merdeka, Jakarta Pusat.</p>
            <a class="read-more py-2" href="article/1"><strong>Read more</strong></a>
            <hr style="border: 1.5px solid black">
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-8">
            <div class="caption-grey">Posted on 20 July 2020</div>
            <h3 class="h5 text-left pb-3">Sejarah dari Museum Fatahillah</h3>
            <div class="img3"></div>
            <p class="pt-3 text-truncate">Museum Fatahillah memiliki nama resmi. Museum Sejarah Jakarta adalah sebuah museum yang terletak di Jalan Taman Fatahillah No. 1, Jakarta Barat dengan luas lebih dari 1.300 meter persegi. Bangunan ini dahulu merupakan balai kota Batavia (bahasa Belanda: Stadhuis van Batavia) yang dibangun pada tahun 1707-1712 atas perintah Gubernur-Jendral Joan van Hoorn. Bangunan ini menyerupai Istana Dam di Amsterdam, terdiri atas bangunan utama dengan dua sayap di bagian timur dan barat serta bangunan sanding yang digunakan sebagai kantor, ruang pengadilan, dan ruang-ruang bawah tanah yang dipakai sebagai penjara. Pada tanggal 30 Maret 1974, bangunan ini kemudian diresmikan sebagai Museum Fatahillah.</p>
            <a class="read-more py-2" href="article/3"><strong>Read more</strong></a>
            <hr style="border: 1.5px solid black">
        </div>
    </div>
    </div>
</div>
  @endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>