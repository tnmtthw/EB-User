<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Up</title>
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
  body {
  margin-top: 50px;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  /*background-color: #4663ac;*/
  background-image: url(assets/img/signup-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;            
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
  }

  .signup-form {
    max-width: 800px;
    height: auto;
    margin: 0 auto;
    padding: 15px 15px;
    background-color:white;
    border-radius: 10px;
  }

  .signup-form header{
    text-align: left;
    font-weight: bold;
    font-size: 25px;
  }

  h3 {
    text-align: center;
    padding: 2px;
    border-bottom: solid 3px #47b2e4;
  }

  h4 {
    padding: 10px;
    text-align: left;
  }

  .form-group {
    margin-bottom: 5px;
    padding: 5  px;
  }

  label {
    display: block;
    font-weight: normal;
    margin-bottom: 5px;
    font-size: 14px;
  }

  input {
    width: 100%;
    padding: 8px;
    font-size: 12px;
    border-radius: 5px;
    border: 1px solid gray;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  input:hover {
    cursor: pointer;
    border: 1px solid black;
  }

  .gender-option{
      margin: 15px;
      color: black;
      display: flex;
  }

  .gender-option label{
      padding: 0 20px 0 5px;
  }
  .gender-option label,
  .gender-option input{
      cursor: pointer;
      display: initial;
  }

  button[type="submit"] {
    display: block;
    width: 80%;
    margin: auto;
    padding: 10px;
    font-size: 16px;
    background-color: #47b2e4;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: lightblue;
  }

  .inner-page p {
    text-align: center;
    margin-top: 20px;
  }

  a {   
    color:#4663ac;
  }

  .terms-and-conditions input[type="checkbox"] {
    height: 15px;
    width: 15px;
    display: inline-block;
    box-shadow: none;
    margin-left: 15px;
  }

  .terms-and-conditions label[for="accept-terms"] {
    display: inline-block;
  }

</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">EBarangay</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Contacts</a></li>
          <li><a class="nav-link scrollto" href="#team">News</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul> -->
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul> -->
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
              
      </div>
    </section> -->
    <!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <form class="signup-form" action="{{route('signup.post')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <h3>Signup</h3>
          <h4>Personal Details</h4>
          <div class="container">
            <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('sucess'))
                <div class="alert alert-sucess">{{session('sucess')}}</div>
            @endif
            </div>
          <!--User info-->
          <!--3 ROWS-->
            <div class="row"> 
              <div class="col-md-4">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" name="firstname" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middlename" name="middlename" >
                </div>
              </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" >
                  </div>
                </div>
            </div>
            <div class ="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="phone">Contact Number</label>
                  <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="bday">Date of Birth</label>
                  <input type="date" id="bday" name="bday" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="gender">
                  <label>Gender</label>
                  <div class="gender-option">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                      <label class="form-check-label" for="female">Female</label>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <div class="row">
              <!--ADDRESS-->
              <div class="col-md-4">
                <div class="form-group">
                  <label for="house_number">House Number</label>
                  <input type="text" name="house_number">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  @php
                    $filePath = public_path('streets.txt');
                    $streets = file($filePath, FILE_IGNORE_NEW_LINES);
                  @endphp
                  <label for="street">Street Name</label>
                  <select id="street" name="street" class="form-control">
                    <option value="">Select a street</option>
                    @foreach($streets as $street)
                        <option value="{{ $street }}">{{ $street }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="sitio">Sitio</label>
                  <select id="sitio" name="sitio" class="form-control">
                    <option value="">Select a Sitio</option>
                    <option value="Sitio1">Sitio 1</option>
                    <option value="Sitio2">Sitio 2</option>
                    <option value="Sitio3">Sitio 3</option>
                    <option value="Sitio4">Sitio 4</option>
                    <option value="Sitio4">Sitio 5</option>
                    <option value="Sitio4">Sitio 6</option>
                    <option value="Sitio4">Sitio 7</option>
                  </select>
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="brgy">Barangay</label>
                  <input type="text" name="brgy" placeholder="East Rembo">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" name="city" placeholder="Makati City">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="zip">Zip Code</label>
                    <input type="number" name="zip" placeholder="1216">
                </div>
              </div>
            </div>
            <!--ID-->
            <div class="row">
              <!--mas better sa type of ID naka drop down-->
              <div class="col-6">
                <div class="form-group">
                  <label for="id">Type of ID</label>
                  <input type="text" id="id" name="id" placeholder="Sitio Clearance" disabled> 
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="img">Valid ID</label>
                  <input type="file" name="image">
                </div>
              </div>
            </div>
        <!--personal info end-->
        <!--Log in info -->
          <h4>Log in information</h4>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="password" name="password_confirmation">
              </div>
            </div>
            <div class="terms-and-conditions">
              <input type="checkbox" id="accept-terms" name="accept-terms" required> 
              <label for="accept-terms" style="display: inline-block;">I have read and agree to the <a href="#">terms and policies</a></label>
            </div>
          <button type="submit">Sign Up</button>
          <p style="text-align:center">Already have an account? <a href={{ url('/') }}>Log in here</a></p>
        </form>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    
  @include('include.footer')
    <!-- 
        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div> -->
    
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3 style="text-transform:none;">E-Barangay</h3>
                <p>
                  109 7th Ave,<br>
                  Makati, 1216<br>
                  Metro Manila <br><br>
                  <strong>Phone:</strong> (02) 7728 1588 <br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Doument Request</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Appointment Schedule</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Send Complaints</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
                  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Visit us on Our Social Media Platform</p>
                <div class="social-links mt-3">
                  <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>E-Barangay</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">Moonlight</a>
          </div>
        </div>
      </footer><!-- End Footer -->

  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

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