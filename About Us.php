<?php
session_start();
// Check if the user is logged in, and if not, redirect them to the login page
if (!isset($_SESSION['id'])) {
    header("Location: login.php"); // Change 'login.php' to your actual login page
    exit();
}
?>
<!doctype html>
<html lang="en">

<!--!----------------------------------------------------------------------------------------------------------------- -->
<!--!                                                 HEAD                                                             -->
<!--!----------------------------------------------------------------------------------------------------------------- -->

<head>
    <meta charset="utf-8">
    <title>HAKIM 2023</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- Favicons -->
    <link href="img/favicon/fav1.png" rel="icon">
    <!-- icon for Apple devices -->
    <link href="img/favicon/fav1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/how_it_works.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/intlTelInput.css">

</head>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
    (function () {
        emailjs.init("cS4MPeWQNKyElWMFu");
    })();
</script>

<!--!----------------------------------------------------------------------------------------------------------------- -->
<!--!                                                 BODY                                                             -->
<!--!----------------------------------------------------------------------------------------------------------------- -->

<body data-spy="scroll" data-target="#navbar-example">


    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                                 HEADER                                                           -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <header>
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">


                        <!--!----------------------------------------------------------------------------------------------------------------- -->
                        <!--!                                                 NAVIGATION BAR                                                   -->
                        <!--!----------------------------------------------------------------------------------------------------------------- -->

                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <a href="index.html">
                                        <img src="img/logo/images (1).jpeg" alt="" title="" style="padding-top: 10px;">
                                    </a>
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="home.php?id=<?php echo $_SESSION['id']; ?>">Home</a>
                  </li>
                  
                  <li class="active">
                    <a class="page-scroll" href="About Us.php?id=<?php echo $_SESSION['id']; ?>">About Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="Submit_Yearbook_Details.php?id=<?php echo $_SESSION['id']; ?>">Year Book Details</a>
                  </li>
                  <li>
                                        <a class="page-scroll" href="View_Details.php?id=<?php echo $_SESSION['id']; ?>">Show Detail</a>
                                    </li>
                  <li>
                    <a class="page-scroll" href="logout.php">Logout</a>
                  </li>


                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">


                    <!--!----------------------------------------------------------------------------------------------------------------- -->
                    <!--!                                                 NAVIGATION BAR                                                   -->
                    <!--!----------------------------------------------------------------------------------------------------------------- -->

                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <a href="index.html">
                                    <img src="img/logo/images (1).jpeg" alt="" title="" style="padding-top: 10px;">
                                </a>
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                            id="navbar-example">
                             <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="home.php?id=<?php echo $_SESSION['id']; ?>">Home</a>
                  </li>
                  
                  <li class="active">
                    <a class="page-scroll" href="About Us.php?id=<?php echo $_SESSION['id']; ?>">About Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="Submit_Yearbook_Details.php?id=<?php echo $_SESSION['id']; ?>">Year Book Details</a>
                  </li>
                  <li>
                                        <a class="page-scroll" href="View_Details.php?id=<?php echo $_SESSION['id']; ?>">Show Detail</a>
                                    </li>
                  <li>
                    <a class="page-scroll" href="logout.php">Logout</a>
                  </li>


                </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </header>


    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                                 HOME-SLIDER                                                      -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="img/inicio slider/doc1.jpg" alt="" title="#slider-direction-1" />
                <!-- <img src="img/inicio slider/slider_2.jpg" alt="" title="#slider-direction-2" />
                <img src="img/inicio slider/logo.jpg" alt="" title="#slider-direction-3" /> -->
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp tonyred" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1"><span>Aim of the website.</span></h2>
                                    
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

                                    
                                    </h1>
                                    <!-- <a class="ready-btn page-scroll" href="Get_In_touch.html" target="_blank">Get in
                                        touch</a> -->
                                    <a class="ready-btn page-scroll" href="#"
                                        class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"
                                        data-toggle="modal" data-target="#getintouch4">Learn More
                                      </a>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <!-- <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content text-center"> -->
            <!-- layer 1 -->
            <!-- <div class="layer-1-1 hidden-xs wow slideInUp tonyred" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1"><span>Birhan</span> Solutions</h2> -->
            <!-- </div> -->
            <!-- layer 2 -->
            <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Grow your business by working with top software engineers.</h1>
                                    <a class="ready-btn page-scroll" href="Get_In_touch.html" target="_blank">Get in
                                        touch</a>
                                </div> -->
            <!-- layer 3 -->
            <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

            <!-- direction 3 -->
            <!-- <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content"> -->
            <!-- layer 1 -->
            <!-- <div class="layer-1-1 hidden-xs wow slideInUp tonyred" data-wow-duration="2s"
                                data-wow-delay=".2s">
                                <h2 class="title1"><span>Birhan</span> Solutions</h2>
                            </div> -->
            <!-- layer 2 -->
            <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Grow your business by working with top software engineers.</h1>
                                <a class="ready-btn page-scroll" href="Get_In_touch.html" target="_blank">Get in
                                    touch</a>
                            </div> -->
            <!-- layer 3 -->
            <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
            <!-- End Slider Area -->




        </div>
    </div>
    </div>
    </div>
    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                               About Us                                                  -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <!-- start about us area -->
    <div id="pricing" class="pricing-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Financial Analysis</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list active">
                        <h3>Amount Collected</h3>
                    
                        <a data-toggle="modal" data-target="#getintouch2" href="#">
                            <button>View</button></a>

                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list active">
                        <h3>Audit Report</h3>
                       
                        <a data-toggle="modal" data-target="#getintouch" href="#">
                            <button>View</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list active">
                        <h3>Current Balance</h3>
                       
                        <a data-toggle="modal" data-target="#getintouch3" href="#">
                            <button>View</button></a>
                    </div>
                </div>
                <br><br>

            </div>

         
        </div>
        <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

            <h1 class="title2" style="color: Black; padding-left: 30px;">Didn't find what you are looking for? <a
                    href="Get_In_touch.html" style="color: red;" class="blink_me">Contact
                    Us</a> -->
        <!-- <style>
                    .blink_me {
                        animation: blinker 0.5s linear infinite;
                    }

                    @keyframes blinker {
                        50% {
                            opacity: 0;
                        }
                    }
                </style> -->
        <!-- </h1> -->



    </div>
    </div>


      <div class="modal fade" id="getintouch" tabindex="-1" role="dialog" aria-labelledby="getintouchLabel"
    aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:lightblue">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="getintouchLabel">HAKIM 2023</h4>
        </div>
        <div class="modal-body">

          <form class="form-getintouch" method="post">
            <script src="js/scripts.js"></script>
            <h3 class="title-style-1 text-center">Audit Report<span class="title-under"></span> </h3>


            <div class="form-group">
               <label for="half">Half Life</label>
               <input type="text" class="form-control" value="Amount Aquired from Sponsor (WDC): 50,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Tent, Dj, Stage, Carpet, Tables & Chairs With Cloths & Transport: 50,900 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
              <input type="text" class="form-control" value="Payment for Eliana Hotel: 50,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Camera Crew: 20,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Security: 2,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Decor: 1,378 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Banner (3 pcs): 4,275 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for beer for Other Batch Event Organizer: 3,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Total Amount Spent from GOC Account: 83,953 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px;margin-top: 10px;" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label for="100days">100 Days</label>
              <input type="text" class="form-control" value="Total Cost: 0" id="lname" disabled
                style="height: 40px;border-radius: 10px" />
              <div class="validation"></div>
            </div>
<div class="form-group">
              <label for="100days">Year book</label>
              <input type="text" class="form-control" value="Total Cost: 0" id="lname" disabled
                style="height: 40px;border-radius: 10px" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <label for="100days">Fare-Well Dinner</label>
              <input type="text" class="form-control" value="Total Cost: 0" id="lname" disabled
                style="height: 40px;border-radius: 10px" />
              <div class="validation"></div>
            </div>

          
            
        </div>


        <div class="row">

          

        </div>





        </form>
        <script src="js/intlTelInput.js"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "js/utils.js",
          });
        </script>
      </div>
    </div>
  </div>




    <div class="modal fade" id="getintouch2" tabindex="-1" role="dialog" aria-labelledby="getintouchLabel"
    aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:lightblue">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="getintouchLabel">HAKIM 2023</h4>
        </div>
        <div class="modal-body">

          <form class="form-getintouch" method="post">
            <script src="js/scripts.js"></script>
            <h3 class="title-style-1 text-center">Amount Collected<span class="title-under"></span> </h3>


            <div class="form-group">
              
               <input type="text" class="form-control" value="Total Amount Collected: 696,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <!-- <input type="text" class="form-control" value="Payment for Tent, Dj, Stage, Carpet, Tables & Chairs With Cloths & Transport: 50,900 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
              <input type="text" class="form-control" value="Payment for Eliana Hotel: 50,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Camera Crew: 20,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Security: 2,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Decor: 1,378 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Banner (3 pcs): 4,275 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for beer for Other Batch Event Organizer: 3,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Total Amount Spent from GOC Account: 83,953 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px;margin-top: 10px;" /> -->
              <div class="validation"></div>
            </div>
            

           

          
            
        </div>


        <div class="row">

          

        </div>





        </form>
        <script src="js/intlTelInput.js"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "js/utils.js",
          });
        </script>
      </div>
    </div>
  </div>




     <div class="modal fade" id="getintouch3" tabindex="-1" role="dialog" aria-labelledby="getintouchLabel"
    aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:lightblue">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="getintouchLabel">HAKIM 2023</h4>
        </div>
        <div class="modal-body">

          <form class="form-getintouch" method="post">
            <script src="js/scripts.js"></script>
            <h3 class="title-style-1 text-center">Amount Collected<span class="title-under"></span> </h3>


            <div class="form-group">
              
               <input type="text" class="form-control" value="Current Balance: 612,047 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <!-- <input type="text" class="form-control" value="Payment for Tent, Dj, Stage, Carpet, Tables & Chairs With Cloths & Transport: 50,900 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
              <input type="text" class="form-control" value="Payment for Eliana Hotel: 50,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Camera Crew: 20,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Security: 2,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Decor: 1,378 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Banner (3 pcs): 4,275 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for beer for Other Batch Event Organizer: 3,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Total Amount Spent from GOC Account: 83,953 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px;margin-top: 10px;" /> -->
              <div class="validation"></div>
            </div>
            

           

          
            
        </div>


        <div class="row">

         

        </div>





        </form>
        <script src="js/intlTelInput.js"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "js/utils.js",
          });
        </script>
      </div>
    </div>
  </div>




    <div class="modal fade" id="getintouch4" tabindex="-1" role="dialog" aria-labelledby="getintouchLabel"
    aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:lightblue">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="getintouchLabel">HAKIM 2023</h4>
        </div>
        <div class="modal-body">

          <form class="form-getintouch" method="post">
            <script src="js/scripts.js"></script>
            <h3 class="title-style-1 text-center">Aim of the website<span class="title-under"></span> </h3>


            <div class="form-group">
              <textarea id="" cols="75" rows="4" disabled style="resize: none;">This website is made by the GOC of HAKIM 2023 to facilitate the process of data collection for the hoodie & year book information. It also incorporates additional features of audit report for all our events.</textarea>
             
                <!-- <input type="text" class="form-control" value="Payment for Tent, Dj, Stage, Carpet, Tables & Chairs With Cloths & Transport: 50,900 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
              <input type="text" class="form-control" value="Payment for Eliana Hotel: 50,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Camera Crew: 20,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Security: 2,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Decor: 1,378 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for Banner (3 pcs): 4,275 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Payment for beer for Other Batch Event Organizer: 3,000 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px" />
                <input type="text" class="form-control" value="Total Amount Spent from GOC Account: 83,953 birr" id="fname" disabled 
                style="height: 40px;border-radius: 10px;margin-top: 10px;" /> -->
              <div class="validation"></div>
            </div>
            

           

          
            
        </div>


        <div class="row">

          

        </div>





        </form>
        <script src="js/intlTelInput.js"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "js/utils.js",
          });
        </script>
      </div>
    </div>
  </div>





    </div>
    <!-- End about us area -->

    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                                 FOOTER                                                           -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">Copyright ©
                    <script>document.write(new Date().getFullYear());</script> <a href="#">Designed By Dr. Fitsum Assefa.</a>All rights
                    reserved
                </span>
              
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                                 JAVASCRIPT LIBRARIES                                             -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>