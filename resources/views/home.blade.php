<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Barangay</title>
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


  <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
/* <!-- span logo style  --> */

#hero {
  width: 100%;
  height:200px;
  /* background-color: #024AA2; */
  background-image: url('assets/img/bgg1.png');
  background-repeat: no-repeat;
  background-size: cover;

}
#header{
  background-color:transparent;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.5rem 1rem;
}

/* Styles for the mobile version of the navbar */
.navbar-mobile {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(40, 58, 90, 0.9);
  z-index: 999;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Media query for screens smaller than 768px */
@media screen and (max-width: 767px) {
  .navbar {
    display: none;
  }
  .navbar-mobile {
    display: flex;
  }
}
.fixed-top .logo span{
      display: inline;
      font-size:30px;
      color:darkblue;
      color:yellow;
}
.container button{
  color:white;
  background-color:transparent;

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

/* <!-- span --> */
.container1 {
  padding: 2rem 0rem;
}


.modal-header .close {
  margin-top: -1.5rem;
}

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}
/* Styling for the input fields */
.form-control {
  border-radius: 10px;
  /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
}

/* Styling for the label */
label {
  display: block;
  margin-bottom: 5px;
}

/* Styling for the form title */
.form-title h4 {
  margin-bottom: 20px;
}

/* Styling for the login button */
.btn-info {
  background-color: #47b2e4;
  border-color: #47b2e4;
}
.text-info {
    color: #47b2e4!important;
}
.text-info:hover {
    color: #47b2e4!important;
}
/* Styling for the sign up link */
.signup-section a {
  color: #47b2e4;
}

/* Set the width of the modal */
.modal-dialog {
  max-width: 500px;
}

/* Center the modal vertically */
.modal-dialog-centered {
  display: flex;
  align-items: center;
}

/* Remove the border from the modal header */
.modal-header {
  border-bottom: none;
}
label {
  display: block;
  margin-bottom: 5px;
  margin-left: 15px; /* add margin to the right */
  width: 100px; /* set a fixed width */
}

/* Set the width and height of the modal */
.modal-dialog {
  max-width: 600px; /* increase the max-width */
  width: 400px;
  height: 400px; /* set a fixed height */
}

/* Center the modal vertically and horizontally */
.modal-dialog-centered {
  display: flex;
  align-items: center;
  justify-content: center; /* add justify-content */
}
#header.header-scrolled,
#header.header-inner-pages {
  background:#024AA2;
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
.icon-box{
  border-radius:25px;
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.php"><span>E</span>Barangay</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Contact Us</a></li>
     <li><a class="nav-link scrollto" href="#services">Services</a></li>
              
          </li>
          <li><a class="nav-link scrollto" href="#contact">About</a></li>
          <div class="container">
  <button type="button" class="getstarted scrollto" data-toggle="modal" data-target="#loginModal">
  Sign in
  </button>  
</div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>EBarangay</h1>
         <h1> East Rembo</h1>
          <h2>Connecting Communities, Empowering Lives Welcome to E-Barangay!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
          
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/logoo2.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
  <section  style=" background: linear-gradient(rgba(67, 171, 224, 0.22), rgba(67, 171, 224, 0.22));padding-left:60px;"; id="services" class="services section-bg">

<div  class="container2" data-aos="fade-up">

  <!-- <div class="section-title">
    <h2>Services</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div> -->
  
  <div class="row">
    
  <div class="section-title">
          <h2>Services</h2>
        </div>

    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box">
      <div class="button">Request Documents</div>
        <img src="assets/img/image2.png" style="height:250px;width: 380px;" >
       <!--  <h4><a href=""></a></h4>
        <p></p> -->
      </div>
    </div>

    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
      <div class="icon-box">
       <div class="button">Request Documents</div>
        <img src="assets/img/image3.png" style="height:250px;width: 380px;" >
      </div>
    </div>

    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
      <div class="icon-box">
      <div class="button">Request Documents</div>
        <img src="assets/img/image4.png" style="height:250px;width: 380px;" >
      </div>
    </div>

   
  </div>

</div>
</section>

  
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row content">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/image6.png" class="img-fluid" >

          </div>
         <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h1 id="yellow" style="font-weight: bold; text-shadow: 3px 0 6px #888888; color: #024AA2;"><span>E</span> Barangay</h1>
            <p1 style="color: #024AA2;">Say goodbye to document request hassle and hello to convenience with E Barangay - your one-stop shop for barangay services!"
            </p1> <br>
            <br>
            <p style="font-weight: 150px;">
            E Barangay is a web application designed to simplify the process of requesting documents and scheduling appointments in the barangay for East Rembo residents. With the use of this platform, residents can easily submit their requests for barangay documents such as clearances, permits, certificates, and other necessary papers without the need for physical visits to the barangay hall.  <br>The web application aims to make the process of document request more efficient and hassle-free for the residents of East Rembo. By eliminating the need to queue up in the barangay office or submit paper documents, residents can save time and effort while obtaining the necessary documents they need.
            </p>
            <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Register Now</a>
          </div>
        </div>
    
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3 style="font-size: 4em;color: #024AA2;"><strong>NEWS AND<br> ANNOUNCEMENTS</strong></h3>
              <br>
             
            </div>

           

          </div>

        <div class="col-lg-4 align-items-stretch order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/image7.png"  style="
            width: 150%;, height: 200; ">
          </div>

        </div>

      </div>

    <!-- ======= Skills Section ======= -->
    <section id="clean" class="clean">
      <div class="container1" data-aos="fade-up" >

        <div class="row" >
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/image8.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3 style="font-size: 4em; color: #024AA2;">
              <strong>Clean Up Drive</strong></h3>
            <p>
              It is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future useIt is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future useIt is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future use.
            </p>
            <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Read More</a>


          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

     <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3 style="font-size: 4em;color: #024AA2;"><strong>BAYANIHAN</strong></h3>
              <br>
              <p>It is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future useIt is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future useIt is the program wherein each barangay would participate in cleaningtheir environment, this would be done weekly and at the end of the month, the barangay that observed cleanliness in their community would be recognized and would earn a point for future use.</p>
               <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Read More</a>
            </div>

           

          </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/image9.png"  class="img-fluid">
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
<!-- ======= Footer ======= -->
@include('include.footer')
</footer><!-- End Footer -->
<!-- modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header border-bottom-0">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-title text-center">
        <h4>Login</h4>
      </div>
      <div class="d-flex flex-column text-center">
        {{-- LOGIN ERROR MSG START HERE --}}
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
        {{-- LOGIN ERROR MSG END HERE --}}
        {{-- LOGIN START HERE --}}
        <form action="{{route('login.post')}}" method="POST">
          @csrf
          <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username">
          </div>
          <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      {{-- LOGIN END HERE --}}   
    <div class="modal-footer d-flex justify-content-center">
      <div class="signup-section">Not a member yet? <a href="{{ route('signup')}}" class="text-info"> Sign Up</a>.</div>
    </div>
</div>
</div>
</div>
</div>


        
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
<script>
 var modal = document.getElementById('loginModal');

// get the close button element inside the modal
var closeButton = modal.querySelector('.close');

// add a click event listener to the close button
closeButton.addEventListener('click', function() {
  // close the modal
  modal.style.display = 'none';
});

// add a click event listener to the modal backdrop
modal.addEventListener('click', function(event) {
  // if the click happened outside the modal content, close the modal
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});

<div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Forgot Password</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="email2" placeholder="Your email address...">
            </div>
            <button type="button" class="btn btn-info btn-block btn-round">Reset Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


  </script>