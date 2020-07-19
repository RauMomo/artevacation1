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
      background: url('masjid_al_barkah2.png') no-repeat center center;
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
          <h2>Sejarah dari Masjid Al-Barkah</h2>
          <h6>Bekasi</h6>
          <figcaption>SUMBER: https://id.wikipedia.org/wiki/Masjid_Agung_Al-Barkah_Bekasi</figcaption>
      </div>
    </div>
    <div class="row py-3">
      <img src="masjid_al_barkah2.png" class="img-fluid" id="image-full">
    </div>
    <div class="row pt-3 pb-5">
      <p class="pt-3">
        Masjid Agung Al-Barkah Bekasi adalah sebuah masjid yang ada di Bekasi. Masjid ini merupakan salah satu masjid tua di Indonesia. Masjid agung yang dibangun tahun 1890 dipelopori H. Abd. Hamid (Alm) penghulu Lanraad saat itu, diatas tanah wakaf Bapak Bachroem (Alm) seluas 3370m² terletak di Alun-Alun Kota Bekasi (sekarang bernama Jalan Veteran). Masjid ini telah mengalami beberapa kali renovasi. Pada tahun 1969 direnovasi total menjadi masjid oleh Bupati Bapak MS. subandi (Alm). Renovasi pertama ketika kota Bekasi menjadi tuan rumah MTQ Jawa Barat 1988, kemudian tahun 1997 lalu direnovasi lagi pada 2002. Sampai kemudian menjadi bentuknya yang semegah dan semewah sekarang ini setelah melalui renovasi total tahun 2004-2008 yang diprakarsai oleh Walikota Bekasi H. Achmad Zurfaih (Alm)
      </p>
      <article class="pt-3">
        <h3>Lokasi</h3>
        <p class="pt-3">Masjid Agung Al-Barkah kota Bekasi berada di Jalan Veteran, Kawasan Alun alun, Pusat pemerintahan kota Bekasi, Provinsi Jawa Barat. Lokasi masjid ini berseberangan dengan Rumah Sakit Daerah kota Bekasi.</p>
      </article>
      <article class="pt-3">
        <h3>Sejarah</h3>
        <p class="pt-3">Masjid Agung Al-Barkah kota Bekasi, dibangun tahun 1890 dipelopori oleh Penghulu Lanraad (Alm) H. Abdul Hamid, di atas tanah wakaf dari (Alm). Haji Bachroem, seluas 3370 m2 yang terletak di jalan Veteran. Bangunan yang belum mencirikan bangunan sebuah masjid pada umumnya.</p>
        <p class="pt-3">Tahun 1967 bangunannya direhab menjadi bentuk masjid oleh Bupati Bekasi Bapak MS. Subandi (ketika itu kota Bekasi masih menjadi bagian dari Kabupaten Bekasi). MS. Subandi yang merupakan bupati Bekasi pertama asal Kampung Gabus Kabupaten Bekasi itu, melibatkan setiap jiwa warga Kabupaten Bekasi turut berpartisipasi menyumbang pembangunan masjid ini sebesar Rp 5,-</p>
        <p class="pt-3">Dalam kemajuan yang terjadi di Bekasi, oleh Bupati Bekasi H Abdul Fatah, pada 1985 kembali dilakukan pembangunan. Bangunannya pada bagian depan masih menggunakan awning berwarna-warni yang saat itu sangat banyak diminati masyarakat dalam setiap melaksanakan pembangunan. Dan saat itu pulalah masjid ini ditetapkan menjadi Masjid Agung Al Barkah Kabupaten Bekasi.</p>
        <p class="pt-3">Dengan ditetapkan sebagai Masjid Agung, Pemerintah Daerah Kabupaten Bekasi mulai campur tangan dalam pembangunannya. Pembangunan pada tahun 1985 menghabiskan biaya Rp 225 juta. Pada 1997 Pemerintah Kabupaten Bekasi saat bupatinya dijabat Muh Djamhari kembali melakukan pembangunan dengan tambahan biaya Rp 100 juta.</p>
        <p class="pt-3">Pada saat kota Bekasi terbentuk tahun 1997 dan terpisah dari Kabupaten Bekasi di zaman wali kota dijabat H Achmad Zurfaih yang merupakan putra asli Bekasi, perhatian pemerintah daerah semakin besar dalam membangun masjid yang kini menjadi kebanggaan kota Bekasi. Mulai tahun 2004 hingga 2008, pembangunan besar-besaran pun dilakukan.</p>
        <p class="pt-3">Persiapan pembangunan masjid Agung Al-Barkahkota Bekasi ini mulai dilakukan tahun 2003 dengan penataan ulang tata ruang alun alun, jalan dan fasilitas lain yang ada. Masjid dirancang lebih modern, namun tetap mencirikan arsitektur timur tengah. Ada keinginan dari walikota saat itu untuk menghadirkan sebuah masjid agung yang referesentatif dan menjadi ikon kota Bekasi. Masjid yang juga dapat dimanfaatkan sebagai area publik, di mana orang bisa ibadah dan menikmati pesona taman kota.</p>
      </article>
      <article class="pt-3">
          <h3>Arsitektur</h3>
          <img src="Masjid_al_barkah.png" class="img-thumbnail img-small-left" width="100" height="100">
          <p class="pt-3">Arsitektur masjid mengadaptasi masjid masjid timur tengah yang disublimasi dengan unsur tropis. Masjid di timur tengah tidak mengenal teras atau kanopi, karena iklim Indonesia tropis, masjid membutuhkan kantilever dan kanopi agar air hujan tidak tempias ke dalam masjid makanya kemudian masjid ini dilengkapi dengan teras.</p>
          <p class="pt-3">Delapan daun pintu dari kayu jati berukir kaligrafi mencerminkan 8 pintu menuju surga. Daun pintu tersebut terbuat dari kayu jati yang dipesan langsung dari Jepara, Panitia pembangunan Masjid bahkan datang langsung ke Jepara untuk memilih kayu yang benar benar bagus dari pohon yang sudah berusia di atas 90 tahun. Kubah masjid memiliki diameter 18 meter dan di bawahnya bertuliskan 99 nama Allah (Asmu’ul Husna)</p>
          <p class="pt-3">Tiang tiang masjid dilapisi kayu untuk memberi kesan hangat. Ini diadopsi dari Masjid Agung Demak yang dibuat dari kayu. Juga terdapat elemen floral dan ornamen Islam seperti bintang atau bentuk segi delapan yang umum banyak dipakai pada bangunan masjid. Masjid Agung Al-Barkah kota Bekasi dilengkapi tempat Thaharah, gedung pertemuan dan tempat majelis taklim, perpustakaan, kantor ta’mir dan kantor remaja masjid, taman, plaza dan area parkir.</p>
          <p class="pt-3">Arsitektur masjid tidak lepas dari simbolisasi Islam, setiap detail bangunan memiliki arti. Simbolisasi islam bisa kita jumpai pada 4 buah menara yang memiliki arti 4 tiang ilmu, yakni Bahasa Arab, Syariah, sejarah dan filsafat. Serta syarat hidup bahagia yakni akidah, akhlak, syariah dan ibadah. Tiga bagian bentuk dasar bangunan menara mencerminkan iman islam dan ihsan, sedangkan ketinggian menara 35 meter diambil dari salah satu surat Al-qur’an.</p>
      </article>
    </div>
  </div>
  @endsection
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>