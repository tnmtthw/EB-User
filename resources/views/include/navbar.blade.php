<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Services Section</title>
  <!-- Font Awesome CDN-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet"
  />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>


section {

  /* margin-bottom: 200px; */
  height: auto;
  width: 100%;
  display: grid;
  place-items: center;
}
.row {
  
  position: relative;
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
}
.column {
  width: 100%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #024AA2 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
}
h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #024AA2;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}
.card:hover {
  background-position: 0 100%;
}
.card:hover .icon-wrapper {
  background-color: #ffffff;
  color: #024AA2;
}
.card:hover h3 {
  color: #ffffff;
}
.card:hover p {
  color: #f0f0f0;
}
@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}

.fixed-top {
  background: #024AA2;
  
}
.container3 {
  width: auto;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 20px;
  margin-right: 20px;
  margin-left: 20px;
  margin-top: 80px;
  margin-bottom: 30px;
  
  
}

#header.header-scrolled, #header.header-inner-pages{
  background: #024AA2;
}
.nav-link i {
  font-size: 24px; /* Change the font size to the desired size */
}


.navbar-mobile a, .navbar-mobile a:focus {
    padding-top: 20px;
   
    font-size: 15px;
    color: #37517e;
}

.navbar-mobile a i{
  font-size:30px;
}
.navbar a i, .navbar a:focus i {
    font-size: 25px;
    line-height: 0;
    margin-left: 10px;
    margin-right: 0px;
}

.navbar .dropdown ul {
 
  background: white;  
}
.navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    margin-top: 30px;
    margin-right: 70px  ;
    visibility: visible;
} 
.navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 14px;
    text-transform: none;
    font-weight: 500;
    color: black;
}
.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a {
    color: #47b2e4;
}
.dropdown li:nth-child(2) a {
  position: relative;
  padding-top: 10px;
}

.dropdown li:nth-child(2) a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  border-top: 1px solid #024AA2;
}
.dropdown li:last-child {
  border-top: 1px solid #024AA2;
  padding-top: 10px;
}
.news-section {
 
 background-color: #f7f7f7;
 padding: 50px;
}

.section-title {
 text-align: center;
 font-size: 32px;
 margin-bottom: 30px;
}

.news-container {
 display: flex;
 flex-wrap: wrap;
 justify-content: space-between;
}

.news-item {
 width: calc(33.33% - 20px);
 margin-bottom: 40px;
 box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
 transition: box-shadow 0.3s ease-in-out;
}

.news-item:hover {
 box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
 transform: translateY(-5px);
}

.news-item img {
 display: block;
 width: 100%;
}

.news-title {
 font-size: 24px;
 margin: 20px 0 10px;
}

.news-excerpt {
 font-size: 16px;
 line-height: 1.5;
 margin-bottom: 20px;
}

.read-more-link {
 display: inline-block;
 background-color: #000;
 color: #fff;
 padding: 10px 20px;
 border-radius: 4px;
 transition: background-color 0.3s ease-in-out;
}

.read-more-link:hover {
 background-color: #333;
}
.fixed-top .logo span{
      display: inline;
      font-size:30px;
      color:darkblue;
      color:yellow;
}
#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 500;
  letter-spacing: 2px;
  text-transform:none;
}


</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span> E</span>Barangay</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto" href="#about">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#services"><i class="fas fa-bell fa-xl"></i></a></li>
          <li class="dropdown"><a href="#"><i class="fas fa-user-circle fa-5x"></i></a>
          
          <!-- <li><a class="nav-link   scrollto" href="#portfolio">News</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->

          <!-- <li class="dropdown"><a href="#"><img src="path_to_user_profile_image" alt="&nbsp;User name"></a> -->
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="{{ route('logout')}}">Log out</a></li>  
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
               
             
            </ul>
          </li>
          
          
<!-- 
          modal log in -->

          <!-- mpdal end -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>