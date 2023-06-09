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
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
/* <!-- span logo style  --> */
.resized-image {
  max-width:1000px;
  width: 500px; /* Adjust the width as desired */
  height: 400px; /* Adjust the height as desired */
}
.img-fluid1{
  margin-left:40px;
  max-width:1000px;
  width: 500px; /* Adjust the width as desired */
  height: 500px; /* Adjust the height as desired */
}
#hero {
  width: 100%;
  height:200px;
  /* background-color: #024AA2; */
  background-image: url('assets/img/bgg1.png');
  background-repeat: no-repeat;
  background-size: cover;

}
#services {
    background: radial-gradient(#9cc9ed 55%, #d6edf8 90%);
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
  padding: 2rem 4rem;
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

label {
  display: block;
  color:white;
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
  background: rgba(2, 74, 162, 0.8);
}

#hero {

  height:800px;
}
.button {
  background-color: rgba(2, 74, 162, 1);
  border-radius: 20px;
  color: #fff;
  margin-top: 20px;
  margin-left: 30px;
  margin-right: 30px;
  padding: 10px 0px;
  text-align: center;
}

.button:hover{
  background-color:#43ABE0;
}
.button-request {
  background-color: #024AA2;
  border-radius: 25px;
  color: #fff;
  width: 300px;
  text-decoration: none;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.button-request:hover {
  background-color: #0466c8;
}
.inner {
  height: 800px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.icon-box{
  border-radius:25px;
}
#about {
   background:  linear-gradient(
    to right,
    #fefefe 10%,
    #9cc9ed 50%,
    #fefefe 90%
    
  );
}


/* services */

.section {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom:70px;
  
}

.box1 {
  width: 400px;
  height:350px;
  margin: 20px;
  border: none;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 25px;
 
}

.box1 button {
  display: block;

  margin: 10px auto;
}

.box1 img {
  padding-top:50px;
  width: 30px;
  height: auto;
}
.serviceheader {
  text-transform:Uppercase;
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  color: #012970;
  background-color: none;
  padding: 20px;
 
}
/* hero image */
.hero-img img {
  width: 500px;
  height: auto;
  margin-left:110px;

  
}
.container-fluid1 {
  width:100%;
  background-color: white;
  border-radius: 25px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  margin-bottom:50px;

}


/* Login modal styles */

#loginModal .modal-content {
  border-radius: 25px;
  
  background: linear-gradient(0deg, rgba(24, 89, 169, 0.5), rgba(24, 89, 169, 0.7));
   /* background:rgba(2, 74, 162, 0.8); */



}
#loginModal .modal-header {
  border-bottom: 0;
  text-align:center;
  
}

#loginModal .form-title {
  color: #fff;
  border-radius: 25px 25px 0 0;
  padding: 15px;
}

#loginModal input.form-control {
  border-radius: 25px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.3);
  
}

#loginModal .btn-primary {
  background: linear-gradient(0deg, #024AA2, #024AA2), linear-gradient(0deg, #43ABE0, #43ABE0);
  border-radius: 25px;
  border: solid 1px rgba(67, 171, 224, 1);
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  padding: 10px 30px;
  margin-top: 15px;
}

#loginModal .signup-section {
  margin-top: 15px;
  font-size: 15px;
  color:#00A9FF;
}

#loginModal .signup-section a {
  color: #43ABE0;
  text-decoration: underline;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 2rem; 
     border-top: none;
}

.modal-header {
    display: -ms-flexbox;
    /* display:center; */
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}
.signup{
  color:white;
  font-size:16px;
}
.sign{
  text-decoration:underline;
  color:#00A9FF;
  font-size:16px;
  text-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);

}.forgot{
  margin-top:30px;
  color:#00A9FF;
  font-size:16px;
}

.container {
    max-width: 1300px;
}
.mission-title,
.vision-title {
  padding-top:20px;
  padding-bottom:20px;
  text-align: center;
  font-size: 50px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

  .mission-content,
  .vision-content {
    
    color:#092F5E;
    font-size:22px;
    text-align: justify;
    padding-left:80px;
    padding-right:80px;
  }
  .mission-vision-container {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    height: 491px;
    width: 1261px;
    border-radius: 25px;
    position: relative;
    background-color:white;

  }
  #popup-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
}

#popup {
  background-color: #024AA2;
  padding: 20px;
  padding-left: 100px;
  padding-right: 100px;
  border-radius: 50px;
  text-align: center;
}

.check-circle {
  display: inline-block;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
  line-height: 80px;
  font-size: 40px;
  background-color: #024AA2;
}

.check-mark {
  vertical-align: center;
  color: #024AA2;
}
</style>


</style>
</head>

<body>

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    <img src="assets/img/logo3.png">
    <h1 class="logo me-auto"><a href="index.php">EBarangay</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
     <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
              
          </li>
          <div class="container">
            <button type="button" class="getstarted scrollto" data-toggle="modal" data-target="#loginModal">Sign In</button>  
          </div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

<!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>East Rembo</h1>
        <h2>Connecting Communities, Empowering Lives. Welcome to E-Barangay!</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/logoo2.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>
</section>

<!-- End Hero -->

<header class="serviceheader">Services</header>
<div class="section" data-aos="fade-up">
  <div class="box1" data-aos="zoom-in" data-aos-delay="100">
    <a href="{{ route('request') }}" class="button button-request">Request Documents</a>
    <img src="assets/img/image2.png" style="height:250px;width: 300px;">
  </div>
  <div class="box1" data-aos="zoom-in" data-aos-delay="100">
    <a href="{{ route('compform')}}" class="button button-request">Send Complaint</a>
    <img src="assets/img/image4.png" style="height:250px;width: 300px;">
  </div>
  <div class="box1" data-aos="zoom-in" data-aos-delay="100">
    <a href="{{ route('helpdesk')}}" class="button button-request">Helpdesk</a>
    <img src="assets/img/helpdesk.png" style="height:250px;width: 200px;">
  </div>
</div>


<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row" style="margin-bottom:100px;">
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/image6.png" class="img-fluid">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content text-justify" data-aos="fade-left" data-aos-delay="100">
        <h1 id="yellow" style="font-weight: bold; text-shadow: 3px 0 6px #888888; color: #024AA2;">
          <span style="color: yellow;">E</span> Barangay
        </h1>
        <p1 style="color: #024AA2;">Say goodbye to document request hassle and hello to convenience with E Barangay - your one-stop shop for barangay services!</p1><br><br>
        <p style="font-weight: 150px;">
          E Barangay is a web application designed to simplify the process of requesting documents and scheduling appointments in the barangay for East Rembo residents. With the use of this platform, residents can easily submit their requests for barangay documents such as clearances, permits, certificates, and other necessary papers without the need for physical visits to the barangay hall.<br>
          The web application aims to make the process of document request more efficient and hassle-free for the residents of East Rembo. By eliminating the need to queue up in the barangay office or submit paper documents, residents can save time and effort while obtaining the necessary documents they need.
        </p>
        <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Register Now</a>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up">
      <div class="row"style="margin-bottom:100px;">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
          <div class="content1">
            <h3 style="font-size: 4em; color: #024AA2;font-weight: 600;"><strong>NEWS AND ANNOUNCEMENTS</strong></h3>
            <br>
          </div>
        </div>
        <div class="col-lg-4 align-items-stretch order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
             <img src="assets/img/NewsImage.png" class="img-fluid resized-image">
        </div>
      </div>
    </div>

    <!-- ======= Skills Section ======= -->

    @foreach ($announcements as $ann)
    @if ($ann->id % 2 == 0)
    <div class="container-fluid" data-aos="fade-up">
      <div class="row"style="margin-bottom:100px;">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
          <div class="content text-justify">
            <h3 style="font-size: 4em;color: #024AA2;"><strong>{{ $ann->title }}</strong></h3>
            <br>
            <p>{{ $ann->body }}</p>
            <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Read More</a>
          </div>
        </div>
        <div class="col-lg-5 align-items-stretch order-1 order-lg-2" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ Storage::disk('s3')->url($ann->image) }}" class="img-fluid1">
        </div>
      </div>
    </div>
   
    @else
    <div class="container-fluid1 bg-white shadow">
      <section id="clean" class="clean">
        <div class="container1" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{ Storage::disk('s3')->url($ann->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
              <h3 style="font-size: 4em; color: #024AA2;text-align:left;padding-left:15px;"><strong>{{ $ann->title }}</strong></h3>
              <p class="text-justify" style="padding-right:20px;padding-left:20px;padding-bottom:20px;">{{ $ann->body }}</p>
              <a href="#" class="btn-learn-more" style="border-radius: 25px; color: #024AA2;">Read More</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    @endif
    @endforeach
  </div>

  <div class="container mission-vision-container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mission">
          <h2 class="mission-title" style="color: yellow;">Mission</h2>
          <p class="mission-content">East Rembo intends to deliver excellent social services through a healthy, safe, and clean environment. Our mission is to continuously increase the preparedness of residents, enhance the accessibility and quality of health services, develop a peaceful and disciplined community, and create more business opportunities through livelihood programs.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="vision">
          <h2 class="vision-title" style="color: blue;">Vision</h2>
          <p class="vision-content">East Rembo envisions becoming one of the most resilient barangays in Makati City. Our vision is to have empowered, God-loving, and professional citizens living in a progressive economy, a disaster-resilient community, and an ecologically balanced environment. We strive for excellent public service and fair, transparent governance.</p>
        </div>
      </div>
    </div>
  </div>
</section>


   
  </main>
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  
<!-- ======= Footer ======= -->
@include('include.footer')
</footer><!-- End Footer -->
<!-- modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-header ">
       
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        
      </div>
      <div class="title" style="text-align:center ; font-size: 28px; font-weight:bold; color:white;
"> LOG IN </div>
      <div class="modal-body">
        
        <div class="d-flex flex-column text-center">
          {{-- LOGIN START HERE --}}

          <div id="popup-container" style="display:none;">
  <div id="popup">
  <div class="check-circle">
   <img src="assets/img/Vector.png" alt="Info Icon">
  </div><br>
    <a>successfully logged In!</a><br><br>
  </div>  
</div>
          @if (session('errorMessage'))
          <div class="alert alert-danger" role="alert" id="errorMessage">
            {{ session('errorMessage') }}
          </div>
          @endif        
          <form action="{{route('login.post')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control shadow" name="username" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-button">Submit</button>
          </form>

          {{-- LOGIN END HERE --}}
          <div class="modal-footer d-flex justify-content-center">
            <div class="signup">Not a member yet? <a href="{{ route('signup')}}" class="sign"> Sign Up</a></div>

            <a href="" class="forgot" style="text-decoration:underline";> Forgot Passowrd </a>
          </div>
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

<script>
  $(document).ready(function(){
    var errorMessage = "{{ session('errorMessage') }}";
    if(errorMessage !== ''){
        $('#errorMessage').html(errorMessage);
        $('#loginModal').modal('show');
    }
  });
  
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

const submitButton = document.getElementById('submit-button');
const popupContainer = document.getElementById('popup-container');

submitButton.addEventListener('click', () => {
  popupContainer.style.display = 'flex';
});

 
</script>