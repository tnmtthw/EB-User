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


.services{
	background: url('signup-bg.jpg');
	background-size: 2000px 1800px;
  background-repeat: no-repeat;

}
.table {
  width: 65%;
  margin: auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.row {
  padding: 20px;
}

.blue {
  background-color: #024AA2;
  color: #fff;
}

.transparent {
  background-color: transparent;
}

h2 {
  margin: 0;
  font-size: 2em;
}

h3 {
  margin: 20px 0 10px;
  font-size: 1.5em;
}

form {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="file"],
input[type="checkbox"] {
  width: 200px;
  height: 25px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #024AA2;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 20px;

}


table

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto" ><a href="index.php"><span>E</span>Barangay</a></h1>
    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
     <li><a href="#services">Services</a></li>
           <li><a href="#contact">Contact</a></li>
          <li><a  href="#contact">News</a></li>
          <div class="container">
 		<a style="color: white"><span id='clock'></span></a>
</div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<br>

  <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="table" data-aos="fade-up">

  <div class="row blue" style="text-align: center;">
    <h2>Barangay Business Clearance Application Form</h2>
  </div>
  <div class="row transparent">
    <h3>I. Personal Information</h3>
    <form>
      <div>
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname">

      <label for="middlename">Middle Name:</label>
      <input type="text" id="middlename" name="middlename">

      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname">

      <label for="suffix">Suffix:</label>
      <input type="text" id="suffix" name="suffix">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email">

      <label for="contactnumber">Contact Number:</label>
      <input type="text" id="contactnumber" name="contactnumber">

      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday">

      <label for="age">Age:</label>
      <input type="number" id="age" name="age">

      <label for="houseno">House No.:</label>
      <input type="text" id="houseno" name="houseno">

      <label for="street">Street:</label>
      <input type="text" id="street" name="street">

      <label for="barangay">Barangay:</label>
      <input type="text" id="barangay" name="barangay">

      <label for="sitio">Sitio:</label>
      <input type="text" id="sitio" name="sitio">

      <label for="city">City:</label>
      <input type="text" id="city" name="city">

      <label for="province">Province:</label>
      <input type="text" id="province" name="province">

      <label for="zipcode">ZIP Code:</label>
      <input type="text" id="zipcode" name="zipcode">

      <label for="residency">Years of Residency:</label>
      <input type="number" id="residency" name="residency">

      <label for="validid">Valid ID:</label>
      <input type="text" id="validid" name="validid">

      <label for="proofidentity">Upload Proof of Identity:</label>
      <input type="file" id="proofidentity" name="proofidentity">
   </div>
    </form>

    <h3>II. Business Details</h3>
    <form><div>
      <label for="businessname">Business Name:</label>
      <input type="text" id="businessname" name="businessname"><br>

      <label for="businessaddress">Business Address:</label>
      <input type="text" id="businessaddress" name="businessaddress"><br>

      <label for="kindofbusiness">Kind of Business:</label>
      <input type="text" id="kindofbusiness" name="kindofbusiness">  <br>
</div>
  <input type="checkbox" id="agreement" name="agreement" value="agree">
  <label for="agreement">I agree to post my data and allow this website to use my information thereof requested.</label><br>
  <p>Under RA10173, people whose personal information is collected, stored, and processed are called data subjects. Organizations who deal with your personal details, whereabouts, and preferences are duty bound to observe and respect your data privacy rights.</p><br>

  <input type="submit" value="Submit">
</form>

  
        
        
    </section>
    </body><!-- End Services Section -->

 

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