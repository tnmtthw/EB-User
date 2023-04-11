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

.container3 {
  width: 60%;
  margin: auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
   background-color: rgba(255, 255, 255, 0.8);
}
.row1 {
  background-color: #024AA2;
  color: #fff;
}
.row2 {
  background-color: transparent;
}
.row {
  padding: 20px;
}
h2 {
  margin: 0;
  font-size: 1.5em;
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
  white-space: nowrap;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="date"],
input[type="file"],
 {
  width: 200px;
  height: 25px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

 input[type="text1"]{
  width: 950px;
  height: 25px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
input[type="submit"] {
  background-color: #024AA2;
  color: #fff;
  border: none;
  padding: 10px 100px;
  border-radius: 50px;
  cursor: pointer;
 align-self: center;
  margin-left: 325px
}

input[type="checkbox"] {
  vertical-align: middle;
  margin-right: 10px;
}

label[for="agree"] {
  display: inline-block;
  padding-left: 5px;
}
#popup-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 999;
  display: flex;
  justify-content: center;
  align-items: center;
}

#popup {
  background-color: white;
  padding: 20px;
  border-radius: 50px;
  text-align: center;
}

#close-button {
  margin-top: 10px;
  background-color: #47b2e4;
  color: white;
  padding: 5px 10px;
  border-radius: 3px;
  border: none;
  cursor: pointer;
}

#close-button:hover {
  background-color: #0d6efd;
}
 .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #024AA2;
        color: #fff;
        border-radius: 50px;
        border: none;
        cursor: pointer;
    }

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
      <div class="container3" data-aos="fade-up">
  <div class="row row1" style="text-align: center;">
    <h1>Barangay Certificate of Indigency Application Form</h1>
  </div>
  <div class="row row2">
    <div class="personal-info">
      <h2>I. Personal Information</h2>
      <div class="row">
        <div class="col">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="first-name">
        </div>
        <div class="col">
          <label for="middle-name">Middle Name</label>
          <input type="text" id="middle-name" name="middle-name">
        </div>
        <div class="col">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="last-name">
        </div>
        <div class="col">
          <label for="suffix">Suffix (optional)</label>
          <input type="text" id="suffix" name="suffix">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="col">
          <label for="contact-number">Contact Number</label>
          <input type="tel" id="contact-number" name="contact-number">
        </div>
        <div class="col">
          <label for="birthday">Birthday</label>
          <input type="date" id="birthday" name="birthday">
        </div>
        <div class="col">
          <label for="age">Age</label>
          <input type="number" id="age" name="age">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="house-number">House No.</label>
          <input type="text" id="house-number" name="house-number">
        </div>
        <div class="col">
          <label for="street">Street</label>
          <input type="text" id="street" name="street">
        </div>
        <div class="col">
          <label for="barangay">Barangay</label>
          <input type="text" id="barangay" name="barangay">
        </div>
        <div class="col">
          <label for="sitio">Sitio</label>
          <input type="text" id="sitio" name="sitio">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="city">City</label>
          <input type="text" id="city" name="city">
        </div>
        <div class="col">
          <label for="province">Province</label>
          <input type="text" id="province" name="province">
        </div>
        <div class="col">
          <label for="zip-code">ZIP Code</label>
          <input type="text" id="zip-code" name="zip-code">
        </div>
      </div>
     <div class="row">
      <div class="col">
        <div class="form-group">
  <label for="civil-status">Civil Status</label>
  <select id="civil-status" name="civil-status">
    <option value="single">Single</option>
    <option value="married">Married</option>
    <option value="separated">Separated</option>
    <option value="widowed">Widowed</option>
  </select>
</div>
      </div>
      <div class="col">
          <label for="residency-years">Years of Residency</label>
          <input type="number" id="residency-years" name="residency-years">
        </div>
        <div class="col">
          <label for="id_type">Valid ID:</label>
<select id="id_type" name="id_type">
  <option value="barangay_id">Barangay ID</option>
  <option value="comelec_cert">COMELEC Certificate</option>
  <option value="philhealth">PhilHealth</option>
  <option value="philsys">PhilSys</option>
</select>
        </div>
        <div class="col">
          <label for="proof-identity">Upload Proof of Identity:</label>
          <input type="file" id="proof-identity" name="proof-identity">
      </div>
      </div>
     
        
    </div>
    <div class="row">
      <div class="col-12">
        <h2>II. upload Necessary Documents</h2>
      </div>
    </div>
  
    <div class="row">
    <div class="col">
        <label for="business-name">Purpose</label>
        <input type="text1" id="purpose" name="purpose">
      </div>
    </div>
    <div class="row">
      
  
      <div class="col">
        <label for="business-address">Community Tax Cetrificate (CEDULA)</label>
         <input type="file" id="ctc" name="ctc">
      </div>
  
      <div class="col">
        <label for="business-type">Certification from the building admin</label>
         <input type="file" id="building-cert" name="building-cert">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">I agree to post my data and allow this website to use my information thereof requested.</label><br>
  <p style="font-size: 14px;">Under RA10173, people whose personal information is collected, stored, and processed are called data subjects. Organizations who deal with your personal details, whereabouts, and preferences are duty bound to observe and respect your data privacy rights.</p><br>
  <input type="submit" id="submit-button" value="Submit">

      </div>
    </div>
    
  </form>
</div>
</div>

  
        
        
    </section>
    </body><!-- End Services Section -->

 

    <!-- ======= Portfolio Section ======= -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')
  
  </footer><!-- End Footer -->


<div id="popup-container" style="display:none;">
  <div id="popup">
    <h3>Application form Submitted!</h3>
    <a> We are now processing your application. <br>Please wait for 3 to 7 working days</a><br><br>
    <a href="index.php" class="button"><i class="fa fa-home"></i>  Back to home</a>
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

const submitButton = document.getElementById('submit-button');
const popupContainer = document.getElementById('popup-container');
const backHome = document.getElementById('back-home');

submitButton.addEventListener('click', () => {
  popupContainer.style.display = 'flex';
});

closeButton.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});


  </script>