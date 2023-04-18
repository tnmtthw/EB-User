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
  height: 80vh;
  background-color: #024AA2;
  /* background-image: url('assets/img/logo.png'); */

}
#header{
  background-color:#024AA2;
    padding: 2px;
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
    color: blue;
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

h1 {
  color: white;
  text-shadow: 3px 0 6px #000000;
  font-weight: 50;
  font-size: 25px;
}
h3 {
  color: white;
  text-shadow: 3px 0 6px #000000;
  font-weight: 50;
  font-size: 40px;
}
/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  margin: 50px;
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #024AA2;
  border-radius: 25px;
  margin: 12px;
}

a {
  color: white;
}
a:hover {
  color: #6e99ff;
}

.services{
	background: url('signup-bg.jpg');
	background-repeat: no-repeat;
	background-size: 1800px 600px;
}


</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto" style="align-content: left;"><a href="index.php"><span>E</span>Barangay</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="{{ url('/') }}">Home</a></li>
          <li><a href="">About</a></li>
     <li><a href="">Services</a></li>
           <li><a href="">Contact</a></li>
          <!-- <li><a  href="{{ route('logout')}}">Logout</a></li> -->
          <div class="container">
 		<a style="color: white"><span id='clock'></span></a>
</div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 <body  >

  <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Document Request</h3>
        </div>

        <div class="row">
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="{{ route('bc')}}">⧁Barangay Business Clearance</a></h1>
            </div>
          </div>
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="{{ route('bca')}}">⧁Certificate of Indigency</a></h1>
            </div>
          </div>
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="{{ route('bcaf')}}" >⧁Barangay Certification</a></h1>
            </div>
          </div>
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="{{ route('bcr')}}" >⧁Certificate of Residency</a></h1>
            </div>
          </div>
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="" >⧁Barangay Certificate for first time job</a></h1>
            </div>
          </div>
          <div class="column" data-aos="zoom-in" data-aos-delay="100">
            <div class="card">
              <h1><a href="{{ route('bcf') }}" >⧁Barangay Clearance Form</a></h1>
            </div>
          </div>
        </div>
        
        
    </section>
    </body><!-- End Services Section -->

 

    <!-- ======= Portfolio Section ======= -->
   
  </main><!-- End #main -->

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
          <form>
            <div class="form-group">
            <label style="text-align:left; ";  for="username"></label>
              <input type="email" class="form-control" id="email1"placeholder="Username">
            </div>
            <div class="form-group">
            <label style="text-align:left"; for="password"></label>
              <input type="password" class="form-control" id="password1" placeholder="Password">
            </div>
            <div class="form-group text-right">
  <a href="#forgotPasswordModal" data-toggle="modal" data-dismiss="modal">Forgot Password?</a>
</div>
            <button type="button" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          
      
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
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