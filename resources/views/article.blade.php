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
  <div class="img" id="headerImageWrapper"></div>
  <div class="container">
    <div class="row py-3">
      <div class="col-md-12">
          <h2>Sejarah dari Monumen Nasional</h2>
          <h6>Jakarta Pusat</h6>
          <figcaption>SUMBER: https://id.wikipedia.org/wiki/Monumen_Nasional</figcaption>
      </div>
    </div>
    <div class="row py-3">
      <img src="u146.svg" class="img-fluid" id="image-full">
    </div>
    <div class="row pt-3 pb-5">
      <p class="col-md-8 pt-3">
        Monumen Nasional atau yang populer disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda. Pembangunan monumen ini dimulai pada tanggal 17 Agustus 1961 di bawah perintah presiden Sukarno dan dibuka untuk umum pada tanggal 12 Juli 1975. Tugu ini dimahkotai lidah api yang dilapisi lembaran emas yang melambangkan semangat perjuangan yang menyala-nyala. Monumen Nasional terletak tepat di tengah Lapangan Medan Merdeka, Jakarta Pusat.
      </p>
      <div class="col-md-4 pt-3">
        <h3 class="h5 text-left pb-2">Lihat artikel lainnya</h3>
        <hr style="border: 1.5px solid black">
        <h6 class="text-left pt-2"><a class="read-more" href="/2">Sejarah dari Masjid Al-Barkah</a>
        <hr style="border: 1.5px solid black">
        <h6 class="text-left pt-2"><a class="read-more" href="/3">Sejarah dari Museum Fatahillah</a>
      </div>
      <article class="pt-3">
        <h3>Sejarah</h3>
        <p class="pt-3">Setelah pusat pemerintahan Republik Indonesia kembali ke Jakarta setelah sebelumnya berkedudukan di Yogyakarta pada tahun 1950, menyusul pengakuan kedaulatan Republik Indonesia oleh pemerintah Belanda pada tahun 1949, Presiden Sukarno mulai merencanakan pembangunan sebuah Monumen Nasional yang setara dengan Menara Eiffel di lapangan tepat di depan Istana Merdeka. Pembangunan Tugu Monas bertujuan mengenang dan melestarikan perjuangan bangsa Indonesia pada masa revolusi kemerdekaan 1945, agar terus membangkitkan inspirasi dan semangat patriotisme generasi penerus bangsa.</p>
        <p class="pt-3">Pada tanggal 17 Agustus 1954, sebuah komite nasional dibentuk dan sayembara perancangan Monumen Nasional digelar pada tahun 1955. Terdapat 51 karya yang masuk, akan tetapi hanya satu karya yang dibuat oleh Frederich Silaban yang memenuhi kriteria yang ditentukan komite, antara lain menggambarkan karakter bangsa Indonesia dan dapat bertahan selama berabad-abad. Sayembara kedua digelar pada tahun 1960 tetapi sekali lagi tak satupun dari 136 peserta yang memenuhi kriteria. Ketua juri kemudian meminta Silaban untuk menunjukkan rancangannya kepada Sukarno. Akan tetapi Sukarno kurang menyukai rancangan itu dan ia menginginkan monumen itu berbentuk lingga dan yoni. Silaban kemudian diminta merancang monumen dengan tema seperti itu, akan tetapi rancangan yang diajukan Silaban terlalu luar biasa sehingga biayanya sangat besar dan tidak mampu ditanggung oleh anggaran negara, terlebih kondisi ekonomi saat itu cukup buruk. Silaban menolak merancang bangunan yang lebih kecil dan menyarankan pembangunan ditunda hingga ekonomi Indonesia membaik. Sukarno kemudian meminta arsitek R.M. Soedarsono untuk melanjutkan rancangan itu. Soedarsono memasukkan angka 17, 8 dan 45, melambangkan 17 Agustus 1945 memulai Proklamasi Kemerdekaan Indonesia, ke dalam rancangan monumen itu. Tugu Peringatan Nasional ini kemudian dibangun di areal seluas 80 hektare. Tugu ini diarsiteki oleh Frederich Silaban dan R. M. Soedarsono, mulai dibangun 17 Agustus 1961.</p>
      </article>
      <article class="pt-3">
        <h3>Pembangunan</h3>
        <img src="u154.png" class="img-thumbnail img-small-right" width="100" height="100">
        <p class="pt-3">Soekarno menginspeksi pembangunan Monas. Foto ini dibuat sekitar tahun 1963-1964. Pembangunan terdiri atas tiga tahap. Tahap pertama, kurun 1961/1962 - 1964/1965 dimulai dengan dimulainya secara resmi pembangunan pada tanggal 17 Agustus 1961 dengan Sukarno secara seremonial menancapkan pasak beton pertama. Total 284 pasak beton digunakan sebagai fondasi bangunan. Sebanyak 360 pasak bumi ditanamkan untuk fondasi museum sejarah nasional. Keseluruhan pemancangan fondasi rampung pada bulan Maret 1962. Dinding museum di dasar bangunan selesai pada bulan Oktober. Pembangunan obelisk kemudian dimulai dan akhirnya rampung pada bulan Agustus 1963.</p>
        <p class="pt-3">Pembangunan tahap kedua berlangsung pada kurun 1966 hingga 1968 akibat terjadinya Gerakan 30 September sehingga tahap ini sempat tertunda. Tahap akhir berlangsung pada tahun 1969-1976 dengan menambahkan diorama pada museum sejarah. Meskipun pembangunan telah rampung, masalah masih saja terjadi, antara lain kebocoran air yang menggenangi museum. Monumen secara resmi dibuka untuk umum dan diresmikan pada tanggal 12 Juli 1975 oleh Presiden Republik Indonesia Soeharto.[4][5] Lokasi pembangunan monumen ini dikenal dengan nama Medan Merdeka. Lapangan Monas mengalami lima kali penggantian nama yaitu Lapangan Gambir, Lapangan Ikada, Lapangan Merdeka, Lapangan Monas, dan Taman Monas. Di sekeliling tugu terdapat taman, dua buah kolam dan beberapa lapangan terbuka tempat berolahraga. Pada hari-hari libur Medan Merdeka dipenuhi pengunjung yang berekreasi menikmati pemandangan Tugu Monas dan melakukan berbagai aktivitas dalam taman.</p>
      </article>
      <article class="pt-3">
        <h3>Rancang Bangun Monumen</h3>
        <img src="u162.png" class="img-thumbnail img-small-left" width="100" height="100">
          <p class="pt-3">Monumen Nasional dalam tahap pembangunan. Rancang bangun Tugu Monas berdasarkan pada konsep pasangan universal yang abadi; Lingga dan Yoni. Tugu obelisk yang menjulang tinggi adalah lingga yang melambangkan laki-laki, elemen maskulin yang bersifat aktif dan positif, serta melambangkan siang hari. Sementara pelataran cawan landasan obelisk adalah Yoni yang melambangkan perempuan, elemen feminin yang pasif dan negatif, serta melambangkan malam hari.[6] Lingga dan yoni merupakan lambang kesuburan dan kesatuan harmonis yang saling melengkapi sedari masa prasejarah Indonesia.
            Selain itu bentuk Tugu Monas juga dapat ditafsirkan sebagai sepasang "alu" dan "Lesung", alat penumbuk padi yang didapati dalam setiap rumah tangga petani tradisional Indonesia. Dengan demikian rancang bangun Monas penuh dimensi khas budaya bangsa Indonesia. Monumen terdiri atas 117,7 meter obelisk di atas landasan persegi setinggi 17 meter, pelataran cawan. Monumen ini dilapisi dengan marmer Italia.</p>
          <p class="pt-3">Kolam di Taman Medan Merdeka Utara berukuran 25 x 25 meter dirancang sebagai bagian dari sistem pendingin udara sekaligus mempercantik penampilan Taman Monas. Di dekatnya terdapat kolam air mancur dan patung Pangeran Diponegoro yang sedang menunggang kudanya, terbuat dari perunggu seberat 8 ton. Patung itu dibuat oleh pemahat Italia, Prof. Coberlato sebagai sumbangan oleh Konsul Jenderal Kehormatan, Dr. Mario, di Indonesia. Pintu masuk Monas terdapat di taman Medan Merdeka Utara dekat patung Pangeran Diponegoro. Pintu masuk melalui terowongan yang berada 3 m di bawah taman dan jalan silang Monas inilah, pintu masuk pengunjung menuju tugu Monas. Loket tiket berada di ujung terowongan. Ketika pengunjung naik kembali ke permukaan tanah di sisi utara Monas, pengunjung dapat melanjutkan berkeliling melihat relief sejarah perjuangan Indonesia; masuk ke dalam museum sejarah nasional melalui pintu di sudut timur laut, atau langsung naik ke tengah menuju ruang kemerdekaan atau lift menuju pelataran puncak monumen.</p>
      </article>
      <article class="pt-3">
        <h3>Relief Sejarah Indonesia</h3>
        <img src="u166.png" class="img-fluid py-3" id="image-full">
          <p class="pt-3">Relief timbul sejarah Indonesia menampilkan Gajah Mada dan sejarah Majapahit Pada tiap sudut halaman luar yang mengelilingi monumen terdapat relief yang menggambarkan sejarah Indonesia. Relief ini bermula di sudut timur laut dengan mengabadikan kejayaan Nusantara pada masa lampau; menampilkan sejarah Singhasari dan Majapahit. Relief ini berlanjut secara kronologis searah jarum jam menuju sudut tenggara, barat daya, dan barat laut.</p>
          <p class="pt-3">Secara kronologis menggambarkan masa penjajahan Belanda, perlawanan rakyat Indonesia dan pahlawan-pahlawan nasional Indonesia, terbentuknya organisasi modern yang memperjuangkan Indonesia Merdeka pada awal abad ke-20, Sumpah Pemuda, Pendudukan Jepang dan Perang Dunia II, proklamasi kemerdekaan Indonesia disusul Revolusi dan Perang kemerdekaan Republik Indonesia, hingga mencapai masa pembangunan Indonesia modern. Relief dan patung-patung ini dibuat dari semen dengan kerangka pipa atau logam, namun beberapa patung dan arca tampak tak terawat dan rusak akibat hujan serta cuaca tropis.</p>
      </article>
      <article class="pt-3">
        <h3>Lokasi</h3>
        <div class="mx-auto"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666466960686!2d106.82496411430981!3d-6.175387062231808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1597119975159!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </article>
    </div>
  </div>
  @endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>