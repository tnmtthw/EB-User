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
#profilebg {

   background:  linear-gradient(
    to right,
    #fefefe 10%,
    #9cc9ed 50%,
    #fefefe 90%
    
  );
}
.container2 {
  width: 65%;
  margin: auto;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: white;
  padding-top: 35px;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 100px;
}

label{
    font-weight: bold;
}

h4{
    color: #024AA2;
    font-weight: bold;
}

#profile-ul {
  list-style-type: none;
  margin: 0 auto;
  padding: 0;
  overflow: hidden;
  background-color: white;
  border-radius: 25px;
  box-shadow: 0 5px 5px rgba(0, 0, 0, 0.9);
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 800px;
}

#profile-ul li {
  flex: 1;
  display: inline-block;
  text-align: center;
}

#profile-ul li a {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #024AA2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border-radius: 40px;
}

#profile-ul .active-hd,
#profile-ul li a.active {
  background-color: #024AA2;
  border-radius: 25px;
  color: white;
  width: 200px;
}

.page {
  display: none;
}

.blue-dot {
    display: inline-block;
    height: 20px;
    width: 20px;
    background-color: #0047FF;
    border-radius: 50%;
    margin-right: 20px;
    margin-left: 20px;
    margin-bottom: 15px;
  }
  
.green-dot {
    display: inline-block;
    height: 20px;
    width: 20px;
    background-color: #32FF11;
    border-radius: 50%;
    margin-right: 20px;
    margin-left: 20px;
    margin-bottom: 15px;
  }
  
.red-dot {
    display: inline-block;
    height: 20px;
    width: 20px;
    background-color: #FF1111;
    border-radius: 50%;
    margin-right: 20px;
    margin-left: 20px;
    margin-bottom: 15px;
  }
  
  .pagecontainer{
    list-style-type: none;
  margin: 0 auto;
  padding: 0 auto;
  padding-left: 10px;
  padding-top: 15px;
  overflow: hidden;
width: 800px;
height: 90px;
display: flex;
align-items: center;
background: #fafafa;
box-shadow: 0px 4px 0px rgba(0, 0, 0, 0.25);
border-radius: 15px;
  }

  #page-container br{
    line-height: 0.5em;
  }

    #all-page {
      display: block;
    }
</style>
</head>

<body>
  
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
  //@include('include.navbar-inside')
    </div>
  </header><!-- End Header -->
<br>
<br>

  <!-- ======= Header ======= -->


    
    <!-- ======= Portfolio Section ======= -->
    <section id="profilebg" class="profilebg">
  <div class="container2" data-aos="fade-up">
    <div class="personal-info">
    <h1 style="color:#024AA2; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); text-align: center; "><strong>REQUESTS</strong></h1>
      <ul id="profile-ul">
        <li><a href="#all" onclick="showPage('all')">All</a></li>
        <li><a href="#ongoing" onclick="showPage('ongoing')">Ongoing</a></li>
        <li><a href="#completed" onclick="showPage('completed')">Completed</a></li>
        <li><a href="#cancelled" onclick="showPage('cancelled')">Cancelled</a></li>
      </ul>
    </div>
    <br>
    <div id="pages-container">
      <div id="all-page" class="page">
        @foreach($dashboard as $docuRequest)
        @if($docuRequest->user_id == auth()->user()->id)
            <div class="pagecontainer">
                @if($docuRequest->status == 0)
                    <span class="blue-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Pending</p></div>
                @elseif($docuRequest->status == 1)
                    <span class="blue-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Approved</p></div>
                @elseif($docuRequest->status == 2)
                    <span class="blue-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: For Pickup</p></div>
                @elseif($docuRequest->status == 3)
                    <span class="green-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Complete</p></div>
                @elseif($docuRequest->status == 4)
                    <span class="red-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Cancel</p></div>
                @endif
                <br>
            @endif
        @endforeach
    </div>
    <div id="ongoing-page" class="page">
        @foreach($dashboard as $docuRequest)
            @if($docuRequest->user_id == auth()->user()->id && ($docuRequest->status == 0 || $docuRequest->status == 1 || $docuRequest->status == 2))
                <div class="pagecontainer">
                    <span class="blue-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    @if($docuRequest->status == 0)
                        Status: Pending</p></div>
                    @elseif($docuRequest->status == 1)
                        Status: Approved</p></div>
                    @elseif($docuRequest->status == 2)
                        Status: For Pickup</p></div>
                    @endif
                    <br>
                @endif
            @endforeach
    </div>
    <div id="completed-page" class="page">
        @foreach($dashboard as $docuRequest)
            @if($docuRequest->user_id == auth()->user()->id && $docuRequest->status == 3)
                <div class="pagecontainer">
                    <span class="green-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>{{ $docuRequest->type }}</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Completed</p></div>
                <br>
            @endif
        @endforeach
    </div>
    <div id="cancelled-page" class="page">
        @foreach($dashboard as $docuRequest)
            @if($docuRequest->user_id == auth()->user()->id && $docuRequest->status == 4)
                <div class="pagecontainer">
                    <span class="red-dot"></span><p><span style="color:#024AA2; font-size: 23px;";><strong>Barangay Clearance</strong></span> <br>
                    Date Requested: {{ $docuRequest->created_at }}<br>
                    Status: Cancel</p></div>
                <br>
            @endif
        @endforeach
    </div>    
      </div>
    </div>
  </div>
</section><!-- End Section -->










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
   document.addEventListener("DOMContentLoaded", function() {
      // Set "All" as active by default
      var allLink = document.querySelector('#profile-ul li:first-child a');
      allLink.classList.add('active');

      // Function to handle page selection
      function showPage(pageId) {
        // Hide all pages
        var pages = document.querySelectorAll('.page');
        for (var i = 0; i < pages.length; i++) {
          pages[i].style.display = 'none';
        }

        // Show selected page
        var selectedPage = document.getElementById(pageId + '-page');
        selectedPage.style.display = 'block';

        // Remove active class from all links
        var links = document.querySelectorAll('#profile-ul li a');
        for (var j = 0; j < links.length; j++) {
          links[j].classList.remove('active');
        }

        // Add active class to the selected link
        var selectedLink = document.querySelector('#profile-ul li a[href="#' + pageId + '"]');
        selectedLink.classList.add('active');
      }

      // Attach click event listener to the links
      var links = document.querySelectorAll('#profile-ul li a');
      for (var k = 0; k < links.length; k++) {
        links[k].addEventListener('click', function(event) {
          event.preventDefault();
          var pageId = this.getAttribute('href').substring(1);
          showPage(pageId);
        });
      }
    });


  </script>