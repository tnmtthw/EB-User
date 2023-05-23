<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <style>


/* HEADER */

 .fixed-top{
  background:#024AA2;
 }
/* 
end HEADER */
/* <!-- span logo style  --> */
/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto" style="align-content: left;"><a href="{{ route('home')}}">EBarangay</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="{{ url('welcome') }}">Home</a></li>
                <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
        
          <!-- <li><a  href="{{ route('logout')}}">Logout</a></li> -->
          <div class="container">
 		<a style="color: white"><span id='clock'></span></a>
</div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->








  <script>

	var dt = new Date();
var hours = dt.getHours();
var minutes = dt.getMinutes();
var ampm = hours >= 12 ? 'pm' : 'am';
hours = hours % 12;
hours = hours ? hours : 12; // the hour '0' should be '12'
var timeString = hours + ':' + minutes + '' + ampm;
document.getElementById('clock').innerHTML = dt.toDateString() + ' ' + timeString;

function clock() {
    var dt = new Date();
    var hours = dt.getHours();
    var minutes = dt.getMinutes();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    var timeString = hours + ':' + minutes + '' + ampm;
    clockElement.textContent = dt.toDateString() + ' ' + timeString;
}

setInterval(clock, 1000);



  </script>