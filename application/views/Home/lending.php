<?php 

    $ip  = $this->input->ip_address(); // Mendapatkan IP user

    $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
    $waktu = time(); //\
    $timeinsert = date("Y-m-d H:i:s");

    // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
$s = $this->db->query("SELECT * FROM tbl_visitor2 WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
$ss = isset($s)?($s):0;

//kalau belum ada simpan data ip
if($ss == 0){
$this->db->query("INSERT INTO tbl_visitor2(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
}

// Jika sudah ada, update
else{
$this->db->query("UPDATE tbl_visitor2 SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
}
        
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Semarak ebunga</title>
    <meta name="keywords" content="">
    <meta name="descrip tion" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/responsive.css">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_lending/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <script type="text/javascript" src="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="></script>
<script type="text/javascript" src="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg=="></script>



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout " style="background: rgb(249,246,251);
background: linear-gradient(180deg, rgba(249,246,251,1) 0%, rgba(110,209,203,1) 33%, rgba(249,207,207,1) 52%, rgba(127,238,179,1) 74%, rgba(118,245,255,1) 88%, rgba(255,255,255,1) 100%);">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
       <!--  <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.html">Home</a> </li>
                                        <li> <a href="about.html">About</a> </li>
                                        <li><a href="brand.html">Brand</a></li>
                                        <li><a href="special.html">Specials</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li class="last">
                                            <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+71)9876543109</li>
                                <li><img src="icon/email.png" />demo@gmail.com</li>
                                <li><img src="icon/loc.png" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section" >
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="<?= base_url() ?>assets_lending/images/banner3.png" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <!-- <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p> -->
                            <!-- <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="https://www.instagram.com/ebunga_com/"><i class="fa fa-instagram"></i></a></li>
                                <li> <a href="ttps://www.youtube.com/channel/UCckDN3oAXos7DQhYugR9SZQ"><i class="fa fa-youtube"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="<?= base_url() ?>assets_lending/images/promo.png" alt="Second slide">
                    <div class="container">
                        <!-- <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>All New Phones </span>
                            <h1>up to 25% Flat Sale</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>


    <div class="judul mt-5">
        <div class="container">
        <h3 class="text-center" style="font-size: 40px; font-weight: bold;">Nikmati Hangatnya Kebersamaan dan Dapatkan Hadiahnya!!</h3>
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2 mt-3">
                    <div class="about_img">
                        <figure><img src="<?= base_url() ?>assets_lending/images/hp.png" alt="img" class="animate__animated animate__fadeInLeft" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2 mb-4">
                    <div class="about_box">
                       <!--  <h3>Langkah Pertama</h3> -->
                        <span>Langkah Pertama</span>
                        <p style="font-size: 20px;">
                            Daftarkan akun kamu dengan mengisi data diri anda secera lengkap melalui website di ebunga.com atau download aplikasi ebunga di Play Store. Undian hanya berlaku bagi member yang sudah terdaftar, baik anggota lama maupun anggota baru.
                            <!-- It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the  --></p>

                    </div>
               
            </div>

           <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2" mt-3>
                    <div class="about_box">
                       <!--  <h3>Langkah Pertama</h3> -->
                        <span>Langkah kedua</span>
                        <p style="font-size: 20px;"><!-- It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the -->

                        Beli produk bingkisan apa saja yang tersedia diebunga.<br> Setiap member yang melakukan transaksi, secara otomatis mengikuti program undian. Pastikan anda sudah terdaftar sebagai member diebunga.</p>

                    </div>
                    
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2 mt-5">
                    <div class="about_img">
                        <figure><img src="<?= base_url() ?>assets_lending/images/kedua.png" alt="img" class="animate__animated animate__fadeInRight" style="" /></figure>
                    </div>
               
            </div>

            <div class="card">
              <div class="card-header">
                <p style="text-align: center; font-size: 30px;margin-top: 20px; font-weight: bold;">Produk ebunga</p>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="mu-book-overview-area">

                            <div class="mu-heading-area">
                                <?php $produk = $this->db->get('tbl_section_produk')->row(); ?>
                               
                                <span class="mu-header-dot" style="background-color: orange;"></span>
                                <p style="font-size: 20px; text-align: center; margin-top: 20px; margin-bottom: 20px;"><?= $produk->sub_judul ?></p>
                            </div>

                            <!-- Start Book Overview Content -->
                            <div class="mu-book-overview-content">
                                <div class="row">

                                <div class="col-md-12">

                                        
                                <div id="bungaku" class="owl-carousel owl-theme">
                                    <?php foreach ($product as $data) { ?>
        
                                    <div id="slid_bunga" class="item slid_bunga" style="border: 4px blue solid; border-radius: 10px;">
                                        <span class="mu-book-overview-icon-box">
                                            <?php if ($data['diskon'] != 0) { ?>
                                            <span class="btn btn-primary" style="position: absolute; right: 15px; bottom: 180px; border-radius: 5%; background-color: #590FFF;"><b>SALE <?= $data['diskon'] ?>%</b></span>
                                        <?php } ?>
                                        <img src="<?= base_url() ?>gambar_galery/<?= $data['gambar'] ?>" class="img-fluid" alt="Image">
                                        </span>
                                        <h4 style="text-align: center; font-weight: bold; margin-top: 8px;"><?= $data['nama_product'] ?></h4>
                                        <?php if ($data['diskon'] != 0) { ?>
                                        <center>
                                        <strike style="text-align: center;">Rp.<?=  number_format($data['harga'],2,",",".") ?></strike></center>
                                        <h6 style="text-align: center; font-weight: bold;">Rp.<?=  number_format($data['harga_diskon'],2,",",".") ?></h6>
                                    <?php }else {  ?>

                                        <h6 style="text-align: center; font-weight: bold;">Rp.<?=  number_format($data['harga'],2,",",".") ?></h6> 
                                    <?php } ?>

                                        <p style="text-align: center;"><?= $data['keterangan'] ?></p>

                                        <?php 

                                            $bilangan = $data['id'];
                                            $hasil = $bilangan % 2;
                                            if ($hasil == 0) { ?>
                                        <center>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                         </center>
                                    <?php } else { ?>
                                         <center>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: #FFD700;"></i>
                                        <i class="fas fa-star" style="color: silver;"></i>
                                    </center>

                                    <?php } ?>

                                    </div>
                                <?php } ?>
                                    
                                </div>
                                <br>
                                <p style="font-size: 20px; margin-top: 10px; text-align: center; margin-bottom: 20px;">Di ebunga kamu bisa memilih produk mulai dari papan bunga, kue ulang tahun, buket bunga, buket uang hingga parcel yang bisa dicustom sesuai dengann moment acaranya.</p>
                                
                                </center>
                            </div>

                                </div>
                            </div>
                            <!-- End Book Overview Content -->

                        </div>
                    </div>
                </div>
              </div>
            </div>

           
       

            <h2 class="text-center mt-5" style="font-size: 40px; font-weight: bold;">Ayooo Buruan Daftar Sekarang Juga Dan Dapatkan 1 Unit Sepeda Motor Yamaha NMX</h2>
        </div>

         <center>
            <form method="post" action="<?= base_url() ?>lending/klik">
                <input type="submit" name="klik" class=" btn btn-danger btn-lg mt-3" style="border: 4px solid red;" value="DAFTAR SEGERA">
            </form>
           <!-- <a href="" class="btn btn-outline-primary btn-lg mt-3" style="border: 4px solid #a67cf1;">DAFTAR SEGERA</a> -->
           </center>

           <center>
           <h2 style="font-size: 50px; margin-top: 30px; font-weight: bold; color: red;">Mau GIVEAWAY 500rb</h2>
           </center>
    </div>
    </div>



    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mt-5" style="font-size: 28px; font-weight: bold;">Silahkan Isi Formulir Dibawah Ini</h2>
                    <form class="main_form" method="post" action="<?= base_url() ?>lending/pesan">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name" required="">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="email" name="email" required="">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Phone" type="number" name="phone" maxlength="13" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="pesan" required=""></textarea>
                            </div>
                            <div class=" col-md-12">
                                <input type="submit" name="kirim" class="send" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     

    <!-- end about -->

    <!-- brand -->
    <!-- <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/1.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/2.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="images/3.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="images/4.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images/5.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="images/6.png" alt="img" />
                            <h3>$<strong class="red">100</strong></h3>
                            <span>Mobile Phone</span>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                            <i><img src="images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
    <!-- end brand -->
    <!-- clients -->
    <!-- <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>what say our clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                
                                <span>Kantor 1 : Komp Cemara Asri, jl.Tanjung No.10, Deli Serdang.</span>
                                <span>Kantor 2 : Jl.Cemara No.15 A, Deli Serdang.
                               </span>
                                <p>Hotline / WA : 0821-6751-1111
                                    </p>
                            </div>
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="https://www.instagram.com/ebunga_com/"><i class="fab fa-instagram"></i></a></li>
                                <li> <a href="https://www.youtube.com/channel/UCckDN3oAXos7DQhYugR9SZQ"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <img src="<?= base_url() ?>assets_lending/images/play-store.png" style="height: 200px; margin-bottom: 100px;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div> -->
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?= base_url() ?>assets_lending/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets_lending/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets_lending/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets_lending/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url() ?>assets_lending/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url() ?>assets_lending/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url() ?>assets_lending/js/custom.js"></script>
    <!-- javascript -->
    <script src="<?= base_url() ?>assets_lending/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script src="<?php echo base_url() ?>assets/alert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


<script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>

<script type="text/javascript">


    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

    
</script>

    


        <?php echo "<script>".$this->session->flashdata('message')."</script>"?> 
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>