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
  height: 40vh;
  background-color: #4981C6;
  background-size: cover;
  background-repeat:   no-repeat;
    background-position: center center;  

}
#services {
    background: radial-gradient(#9cc9ed 55%, #d6edf8 90%);
}
#about {

   background:  linear-gradient(
    to right,
    #fefefe 10%,
    #9cc9ed 50%,
    #fefefe 90%
    
  );
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



.delimiter {
  padding: 1rem;
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



.container1{
  border-radius: 25px; 
  background-color: white;
  width: 1110px;
  height: 470px;
}

.accordion {
  background-color: #024AA2;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  font-weight: bold;
  color: white;
  transition: 0.4s;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.accordion1 {
  background-color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  font-weight: bold;
   color: #024AA2;
  transition: 0.4s;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.accordion:hover {
  background-color: #4D80BD; 
}
.accordion1:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  border-radius: 10px;
}

.panel1 {
  padding: 0 18px;
  display: none;
  background-color: #024AA2;
  overflow: hidden;
  border-radius: 10px;
  color: white;
}

.custom-button {
  margin-left: 165px;
  border: none;
  background: none;
  color: #092F5E;
  text-decoration: underline;
  cursor: pointer;
   font-size: 35px; 
   text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
  @include('include.navbar-inside')
    </div>
  </header><!-- End Header -->
  
<br>
<br>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" style="margin-left: 340px;">
      <div class="row" >
        <div class="col-3" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/logoo2.png" class="img-fluid animated" style="height: 250px; width: 240px;">
        </div>
        <div  class="col-3" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hello.png" style="margin-right: 600px;">
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div  class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/faqs.png" style="margin-top: 90px;">
      </div>
      
      <div class="col-md-8">
        <button class="accordion">What are the requirements in requesting Barangay clearance?</button>
<div class="panel">
  <p>As for Barangay Clearance requirements, you are only required to fill up the form wherein that form will ask the time period of your residency in Barangay ______________. </p>
</div>
<br>
<br>
<button class="accordion accordion1">How long is the processing time for getting documents?</button>
<div class="panel1">
  <p>LMost of the documents can be process in a day but the estimated time for processing the documents is 1 day for the fastest to 3 days for the slowest.</p>
</div>
<br>
<br>
<button class="accordion">How to schedule appointment?</button>
<div class="panel">
  <p>Go to the "Home" page, look for the "Services" section, and click the "Schedule Appointment" button. The page will then redirect you to a form, and you can now start setting up appointments.</p>
</div>
<br>
<br>
<button class="accordion accordion1">How will I pay for the documents I requested?</button>
<div class="panel1">
  <p>After the document request has been approved, you can pay directly at the barangay hall on the same day you pick up the document. Note that the document will not be given if it has not yet been paid.</p>
</div>
<br>
<br>
<button class="accordion">Where can I track the document I requested?</button>
<div class="panel">
  <p>Go to "Dashboard", click "Request List," and there you can see a list of the documents you requested, where you can track them to see if your request has been processed or is ready for pick up.</p>
</div>

  </div>
    </div>
    <br>
    <br>

    <div class="container">
      <div class="row" style="background-color: white; padding-left: 120px; height: 600px;   background: linear-gradient(to right, transparent, white, white, transparent);
  padding: 20px;">
      <h1 style="text-align: center; padding-top: 20px; font-weight: bold; color:#092F5E;">Still can’t find answers you are looking for?</h1>

       <div  class="col" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/bubble.png" style="margin-top: 90px;">
      </div>
       <div  class="col" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/support.png" style="margin-top: 90px; padding-left: 150px;">
          <br>
          <br>
          <button class="custom-button">click here!</button>
      </div>


    </div>
    </div>


    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('include.footer')
  
  </footer><!-- End Footer -->
  


        
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
var accordions = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < accordions.length; i++) {
  accordions[i].addEventListener("click", function() {
    var active = this.classList.contains("active");
    
    // Close all other accordions in the same group
    var accordionGroup = this.classList[1];
    var accordionsInGroup = document.getElementsByClassName(accordionGroup);
    for (var j = 0; j < accordionsInGroup.length; j++) {
      accordionsInGroup[j].nextElementSibling.style.display = "none";
      accordionsInGroup[j].classList.remove("active");
    }
    
    if (active) {
      this.nextElementSibling.style.display = "none";
      this.classList.remove("active");
    } else {
      this.nextElementSibling.style.display = "block";
      this.classList.add("active");
    }
  });
}



  </script>