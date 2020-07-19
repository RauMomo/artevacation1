@extends('layout');

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
      background: url('museum_fatahillah2.jpg') no-repeat center center;
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
  </style>
  </head>
  <body>
  @section('container')
  <div class="img" id="headerImageWrapper"></div>
  <div class="container">
    <div class="row py-3">
      <div class="col-md-12">
          <h2>Sejarah dari Museum Fatahillah</h2>
          <h6>Jakarta Barat</h6>
          <figcaption>SUMBER: Monumen Nasional. (2020). Retrieved 12 June 2020, from https://id.wikipedia.org/wiki/Monumen_Nasional</figcaption>
      </div>
    </div>
    <div class="row py-3">
      <img src="museum_fatahillah2.jpg" class="img-fluid" id="image-full">
    </div>
    <div class="row pt-3 pb-5">
      <p class="pt-3">
        Museum Fatahillah memiliki nama resmi. Museum Sejarah Jakarta adalah sebuah museum yang terletak di Jalan Taman Fatahillah No. 1, Jakarta Barat dengan luas lebih dari 1.300 meter persegi. Bangunan ini dahulu merupakan balai kota Batavia (bahasa Belanda: Stadhuis van Batavia) yang dibangun pada tahun 1707-1712 atas perintah Gubernur-Jendral Joan van Hoorn. Bangunan ini menyerupai Istana Dam di Amsterdam, terdiri atas bangunan utama dengan dua sayap di bagian timur dan barat serta bangunan sanding yang digunakan sebagai kantor, ruang pengadilan, dan ruang-ruang bawah tanah yang dipakai sebagai penjara. Pada tanggal 30 Maret 1974, bangunan ini kemudian diresmikan sebagai Museum Fatahillah.
      </p>
      <article class="pt-3">
        <h3>Sejarah</h3>
        <p class="pt-3">Stadhuis di awal abad ke-20, dihubungkan dengan jalur trem ke pusat pemerintahan di kawasan Weltevreden. Pada awal mulanya, balai kota pertama di Batavia dibangun pada tahun 1620 di tepi timur Kali Besar. Bangunan ini hanya bertahan selama enam tahun sebelum akhirnya dibongkar demi menghadapi serangan dari pasukan Sultan Agung pada tahun 1626.[1] Sebagai gantinya, dibangunlah kembali balai kota tersebut atas perintah Gubernur-Jenderal Jan Pieterszoon Coen pada tahun 1627. Lokasinya berada di daerah Nieuwe Markt (sekarang Taman Fatahillah).[2] Menurut catatan sejarah, balai kota kedua ini hanya bertingkat satu dan pembangunan tingkat kedua dilakukan kemudian. Tahun 1648 kondisi balai kota sangat buruk. Tanah di kota Batavia yang sangat labil dan beratnya bangunan ini menyebabkan perlahan-lahan turun dari permukaan tanah.</p>
        <p class="pt-3">Akhirnya pada tahun 1707, atas perintah Gubernur-Jenderal Joan van Hoorn, bangunan ini dibongkar dan dibangun ulang dengan menggunakan pondasi yang sama. Peresmian Balai kota ketiga dilakukan oleh Gubernur-Jenderal Abraham van Riebeeck pada tanggal 10 Juli 1710, dua tahun sebelum bangunan ini selesai secara keseluruhan.[2] Selama dua abad, balai kota Batavia ini digunakan sebagai kantor administrasi kota Batavia. Selain itu juga digunakan sebagai tempat College van Schepenen (Dewan Kotapraja) dan Raad van Justitie (Dewan Pengadilan). Awalnya sidang Dewan Pengadilan dilakukan di dalam Kastil Batavia. Namun dipindahkan ke sayap timur balai kota dan kemudian dipindahkan ke gedung pengadilan yang baru pada tahun 1870.</p>
        <p class="pt-3">Balai kota Batavia juga mempunyai ruang tahanan yang pada masa VOC dijadikan penjara utama di kota Batavia. Sebuah bangunan bertingkat satu pernah berdiri di belakang balai kota sebagai penjara. Penjara tersebut dikhususkan kepada para tahanan yang mampu membiayai kamar tahanan mereka sendiri. Namun berbeda dengan penjara yang berada di bawah gedung utama. Hampir tidak ada ventilasi dan minimnya cahaya penerangan hingga akhirnya banyak tahanan yang meninggal sebelum diadili di Dewan Pengadilan. Sebagian besar dari mereka meninggal karena menderita kolera, tifus dan kekurangan oksigen. Penjara di balai kota pun ditutup pada tahun 1846 dan dipindahkan ke sebelah timur Molenvliet Oost. Beberapa tahanan yang pernah menempati penjara balai kota adalah bekas Gubernur Jenderal Belanda di Sri Lanka Petrus Vuyst, Untung Suropati dan Pangeran Diponegoro.</p>
        <p class="pt-3">Di akhir abad ke-19, kota Batavia mulai meluas ke wilayah selatan. Sehingga kedudukan kota Batavia ditingkatkan menjadi Gemeente Batavia. Akibat perluasan kota Batavia, aktivitas balai kota Batavia dipindahkan pada tahun 1913 ke Tanah Abang West (sekarang jalan Abdul Muis No. 35, Jakarta Pusat) dan dipindahkan lagi ke Koningsplein Zuid pada tahun 1919 (sekarang Jl. Medan Merdeka Selatan No. 8-9, Jakarta Pusat) sampai saat ini. Bekas bangunan balai kota kemudian dijadikan Kantor Pemerintah Jawa Barat sampai tahun 1942. Selama masa pendudukan Jepang, bangunan ini dipakai untuk kantor pengumpulan logistik Dai Nippon. Setelah Indonesia merdeka, bangunan ini kembali digunakan sebagai Kantor Pemerintah Provinsi Jawa Barat disamping ditempati markas Komando Militer Kota I sampai tahun 1961. Setelah itu digunakan sebagai Kantor Pemerintah Provinsi DKI Djakarta. Pada tahun 1970, bangunan bekas balai kota Batavia ini ditetapkan sebagai bangunan Cagar Budaya. Setelah itu Gubernur DKI Jakarta pada masa itu Ali Sadikin merenovasi seluruh bangunan ini dan diresmikan pada tanggal 30 Maret 1974 sebagai Museum Sejarah Jakarta.</p>
        <p class="pt-3">Seperti umumnya di Eropa, balai kota dilengkapi dengan lapangan yang dinamakan Stadhuisplein. Menurut sebuah lukisan yang dibuat oleh Johannes Rach, di tengah lapangan tersebut terdapat sebuah air mancur yang merupakan satu-satunya sumber air bagi masyarakat setempat. Air itu berasal dari Pancoran Glodok yang dihubungkan dengan pipa menuju Stadhuiplein. Tetapi air mancur tersebut hilang pada abad ke-19. Pada tahun 1972, diadakan penggalian terhadap lapangan tersebut dan ditemukan pondasi air mancur lengkap dengan pipa-pipanya. Maka dengan bukti sejarah itu dapat dibangun kembali sesuai gambar Johannes Rach, lalu terciptalah air mancur di tengah Taman Fatahillah. Pada tahun 1973 Pemda DKI Jakarta memfungsikan kembali taman tersebut dengan memberi nama baru yaitu ‘'’Taman Fatahillah”’ untuk mengenang panglima Fatahillah pendiri kota Jayakarta.</p>
        <p class="pt-3">Pada tahun 1937, Yayasan Oud Batavia mengajukan rencana untuk mendirikan sebuah museum mengenai sejarah Batavia, yayasan tersebut kemudian membeli gudang perusahaan Geo Wehry & Co yang terletak di sebelah timur Kali Besar tepatnya di Jl. Pintu Besar Utara No. 27 (kini Museum Wayang) dan membangunnya kembali sebagai Museum Oud Batavia. Museum Batavia Lama ini dibuka untuk umum pada tahun 1939.</p>
        <p class="pt-3">Pada masa kemerdekaan museum ini berubah menjadi Museum Djakarta Lama di bawah naungan LKI (Lembaga Kebudayaan Indonesia) dan selanjutnya pada tahun 1968 ‘’Museum Djakarta Lama'’ diserahkan kepada PEMDA DKI Jakarta. Gubernur DKI Jakarta pada saat itu, Ali Sadikin, kemudian meresmikan gedung ini menjadi Museum Sejarah Jakarta pada tanggal 30 Maret 1974.</p>
        <p class="pt-3">Untuk meningkatkan kinerja dan penampilannya, Museum Sejarah Jakarta sejak tahun 1999 bertekad menjadikan museum ini bukan sekadar tempat untuk merawat, memamerkan benda yang berasal dari periode Batavia, tetapi juga harus bisa menjadi tempat bagi semua orang baik bangsa Indonesia maupun asing, anak-anak, orang dewasa bahkan bagi penyandang cacat untuk menambah pengetahuan dan pengalaman serta dapat dinikmati sebagai tempat rekreasi. Untuk itu Museum Sejarah Jakarta berusaha menyediakan informasi mengenai perjalanan panjang sejarah kota Jakarta, sejak masa prasejarah hingga masa kini dalam bentuk yang lebih rekreatif. Selain itu, melalui tata pamernya Museum Sejarah Jakarta berusaha menggambarkan “Jakarta Sebagai Pusat Pertemuan Budaya” dari berbagai kelompok suku baik dari dalam maupun dari luar Indonesia dan sejarah kota Jakarta seutuhnya. Museum Sejarah Jakarta juga selalu berusaha menyelenggarakan kegiatan yang rekreatif sehingga dapat merangsang pengunjung untuk tertarik kepada Jakarta dan meningkatkan kesadaran akan pentingnya warisan budaya.</p>
      </article>
    </div>
  </div>
  @endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>