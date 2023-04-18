<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo3.png" rel="icon">
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.navbar .dropdown ul {
    background:white;
}
.container2{
 
  margin-top:0px;
}
.icon-box{

  border-radius:20px;
}
/* news */

.blog-section {
  background-color: #f9f9f9;
  padding: 50px 0;
}

.container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 15px;
}

.header {
  background-color: none;
  color: black;
  text-align: center;
  padding: 10px;
  border-radius: 5px;
}

.card2 {
  margin-bottom:80px;
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: box-shadow 0.3s ease-in-out;
}

.card2:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

  #hero {
    width: 100%;
    height: 80vh;
    background-color:white;
}
.section-bg {
    background-color:#024AA2;
}
.styled-heading {
  background-color:#024AA2;
  border: 1px solid #ddd;
  padding: 10px;
  text-align:center;  
  color:white;
  border-radius:8px;
}
.readmore-btn {
  display: inline-block;
  margin-top: 10px;
  padding: 8px 12px;
  background-color:#47b2e4;
  color: #fff;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  float: right;
}

.readmore-btn:hover {
  background-color: #79d4ff;
  color:white;
}

.button {
  background-color: rgba(2, 74, 162, 1);
  border-radius: 20px;
  color: #fff;
  padding-top: 0px;
  padding: 10px 0px;
  text-align: center;
}.inner {
  height: 800px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.box {
  width: 1600px;
  border-top-left-radius: 50px;
  border-top-right-radius: 250px;
  border-bottom-left-radius: 250px;
  border-bottom-right-radius: 50px;
  height: 700px;
  background: linear-gradient(105.18deg, #43ABE0 38.2%, #024AA2 80.02%, rgba(67, 171, 224, 0) 104.19%);

}
.box2 {
  border-radius: 10px;
  background-color:white;
}
#hero {

  height:800px;
}
  </style>

<body>
@include('include.navbar')

  <!-- ======= Header ======= -->
 <!-- End Header -->

 
 <main id="main">

 <section style="background-image: url('assets/img/bg2.png'); background-size: cover; background-attachment:;" id="hero" class="d-flex align-items-center">
  <!-- Add content here -->




<div class="container">
<div class="row">
<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
  <!-- <h1>E-Barangay </h1>
  <h1>Services</h1> -->
  <div class="d-flex justify-content-center justify-content-lg-start">
    <!-- <a href="#about" class="btn-get-started scrollto">  </a> -->
  
  </div>
</div>
<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
  <img src="assets/img/image1.png" class="img-fluid animated" alt="">
</div>
</div>
</div>

</section>
<section  style=" background: linear-gradient(rgba(67, 171, 224, 0.22), rgba(67, 171, 224, 0.22));"; id="services" class="services section-bg">

<div   class="container2" data-aos="fade-up">

  <!-- <div class="section-title">
    <h2>Services</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div> -->
  
  <div class="row">
    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box">
        <a href="{{ route('request') }}">
          <div class="button">Request Documents</div>
          <img src="assets/img/image2.png" style="height:250px;width: 380px;" >
        </a>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="icon-box">
       <div class="button">Schedule Appointment</div>
        <img src="assets/img/image3.png" style="height:250px;width: 380px;" >
      </div>
    </div>

    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
      <div class="icon-box">
      <div class="button">Send Complaints</div>
        <img src="assets/img/image4.png" style="height:250px;width: 380px;" >
      </div>
    </div>

   
  </div>

</div>
</section>

<div class="inner">
  <div class="box">
    <h1 style="padding-top: 20px; padding-left: 40px;">
      <span style="color: rgba(250, 255, 0, 1)">Barangay East Rembo</span> Officials
    </h1>
    <h2 style="padding-top: 0px; padding-left: 40px;">Organizational Chart</h2>
    <div class="box2" style="height: 250px; width: 270px; background-color: white; margin-top: 20px; margin-left: 50px;">
    <!-- Add content for the second box here -->
</div>

  </div>
  
</div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('include.footer')
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>