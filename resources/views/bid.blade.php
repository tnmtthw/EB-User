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
	background-image: url("assets/img/signup-bg.jpg");
	background-size: 2000px 1800px;
  background-repeat: no-repeat;

    }

.container3 {
  width: 85%;
  margin: auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: #E0EEFE; 
  background: linear-gradient(119.71deg, #E0EEFE 1.03%, #E0EEFE 56.4%, #B3E3FC 99.67%, rgba(255, 255, 255, 0) 106.48%, #60B7E6 111.13%, #7BC3EB 111.14%);
}
.row1 {
  max-width: 100%;
  background-color: #024AA2;
  color: #fff;
  height: 50px;
}
.row2 {
  padding-left: 150px;
  padding-right: 150px;
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
input[type="email"]
 {
  max-width: 240px;
  width: 240px;
  height: 40px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
  padding-left: 20px;
}

 input[type="text1"]{
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
  padding-left: 20px;
}

input[type="text3"]{
  width: 75%;
  height: 40px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
}

input[type="tel"] {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  padding-left: 20px;
  
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

   .button:hover
  {
     background-color: #81CEF4;
  }

    label {
  display: inline-block;
  margin-right: 10px;
}


.row3 input[type="text2"] {
  width: 100%;
  height: 200px; /* change to desired height */
  margin-bottom: 10px;
  border: none;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
  padding: 5px;
}

.row3 {
  position: relative;
}


select#precinct {
  appearance: none; /* Remove default arrow */
  -webkit-appearance: none; /* Remove default arrow for Safari/Chrome */
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%233F51B5' d='M7.41,8.59L12,13.17l4.59-4.58L18,10l-6,6l-6,-6L7.41,8.59z'/%3E%3C/svg%3E"); /* Set arrow image */
  background-repeat: no-repeat;
  background-position: right 10px center;
  background-size: 20px;
   border: 1px solid #ccc;
  border-radius: 10px;
  color: #666; /* Set text color */
  font-size: 16px;
  height: 40px;
  max-width: 100%;
  width: 200px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
  padding: 5px 30px 5px 10px; /* Set padding to create space for arrow */
}

#submit-button {
  background-color: #024AA2;
  color: #fff;
  border: none;
  border-radius: 50px;
}

#submit-button:hover {
  background-color: #81CEF4;
  cursor: pointer;
}
input[type="date"]::-webkit-calendar-picker-indicator {
  filter: invert(25%) sepia(94%) saturate(2771%) hue-rotate(191deg) brightness(92%) contrast(93%);
}

input[type="date"]{
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding-left: 20px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.4); 
}

.custom-file-upload {
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  color: #fff;
  border-radius: 4px;
  background-color: transparent;
}


#img {
  display: none;
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto" ><a href="index.php"><span>E</span>Barangay</a></h1>
    

    @include('include.navbar-inside')

    </div>
  </header><!-- End Header -->
<br>
<br>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
  <div class="container3" data-aos="fade-up">
    <div class="row1" style="text-align: center;">
      <h1>BARANGAY ID FORM</h1>
    </div>
    <div class="row2">
      <div class="personal-info">
        <br>
        <div class="row">
          <div class="col">
            <label for="first-name">First Name</label>
            <input type="text" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}">
          </div>
          <div class="col">
            <label for="middle-name">Middle Name</label>
            <input type="text" id="middlename" name="middlename" value="{{ Auth::user()->middlename }}">
          </div>
          <div class="col">
            <label for="last-name">Last Name</label>
            <input type="text" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}">
          </div>
          <div class="col">
            <label for="suffix">Suffix (optional)</label>
            <input type="text" id="suffix" name="suffix">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="contact">Contact Number</label><br>
            <input type="tel" id="phone" name="phone" maxlength="11" placeholder="Enter your phone number" value="{{ Auth::user()->phone }}">
          </div>
          <div class="col">
            <label for="birthday">Date bday Birth</label><br>
            <input type="date" id="birthday" name="bday" value="{{ Auth::user()->bday }}">
          </div>
          <div class="col">
            <label for="precinct">Voter's Precinct</label><br>
            <select name="precinct" id="precinct" placeholder="Select Precinct">
              <option value="1">0817A</option>
              <option value="2">0817B</option>
              <option value="3">0818A</option>
              <option value="4">0818B</option>
              <option value="5">0819A</option>
              <option value="6">0820A</option>
              <option value="7">0820B</option>
              <option value="8">0821A</option>
              <option value="9">0823A</option>
              <option value="10">0822A</option>
              <option value="11">0821B</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="pob">Place of Birth</label>
            <input type="text1" id="pob" name="pob" placeholder="Enter Place of Birth">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="img">Upload Photo</label><br>
            <input type="file" id="image" class="custom-file-upload" name="image">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <form>
              <input type="submit" id="submit-button" value="Submit">
            </form>
          </div>
        </div>
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


<div id="popup-container" style="display:none;">
  <div id="popup">
    <h3><strong>Your application for Barangay ID<br> has been submitted!</strong></h3>
    <a> We are now processing your application.<br>Please wait for 3 to 7 working days</a><br><br>
    <a href="{{ route('welcome')}}" class="button" class="fa fa-home" >Back to Home</a>
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