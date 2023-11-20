<?php
session_start();
include('configure.php');
if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

// Initialize user ID
$userID = "";

// Check if user ID is set in the URL
if (isset($_GET['id'])) {
    $userID = $_GET['id'];
} else {
    // Handle the case where the user ID is not provided in the URL
    // You may want to add further validation here or take appropriate action
    echo "Error: User ID not provided in the URL.";
}


$success_message = ""; // Initialize the success message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Get other form data
    $fullName = mysqli_real_escape_string($connection, $_POST['fname']);
    $nickName = mysqli_real_escape_string($connection, $_POST['nname']);
    $highSchool = mysqli_real_escape_string($connection, $_POST['high']);
    $dormNumber = mysqli_real_escape_string($connection, $_POST['dorm']);
    $conditionOnAdmission = mysqli_real_escape_string($connection, $_POST['condition']);
    $conditionOfDischarge = mysqli_real_escape_string($connection, $_POST['condition_of_discharge']);
$inTenYears = mysqli_real_escape_string($connection, $_POST['in_ten_years']);

    $memorableTimeInMedSchool = mysqli_real_escape_string($connection, $_POST['memorable']);
    $worstTimeInMedSchool = mysqli_real_escape_string($connection, $_POST['worest']);
    $blackLion = mysqli_real_escape_string($connection, $_POST['black']);
    $ifNotDoctor = mysqli_real_escape_string($connection, $_POST['doc']);
    $inclination = mysqli_real_escape_string($connection, $_POST['inclination']);
    $lastWords = mysqli_real_escape_string($connection, $_POST['lastword']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    
    // Insert data into the specific table (e.g., "med_school_data")
    $tableName = "med_school_data"; // Replace with your table name
   $sql = "INSERT INTO $tableName (user_id, full_name, nick_name, high_school, dorm_number, condition_on_admission, memorable_time_in_med_school, worst_time_in_med_school, black_lion, if_not_doctor, inclination, last_words, email, phone, condition_of_discharge, in_ten_years) VALUES ('$userID', '$fullName', '$nickName', '$highSchool', '$dormNumber', '$conditionOnAdmission', '$memorableTimeInMedSchool', '$worstTimeInMedSchool', '$blackLion', '$ifNotDoctor', '$inclination', '$lastWords', '$email', '$phone', '$conditionOfDischarge', '$inTenYears')";

     if (mysqli_query($connection, $sql)) {
        // Set the success message when data is inserted successfully
        $success_message = "Year Book Details Has Been Sent Successfully.";
        // Display the success message as a JavaScript alert
        echo '<script>alert("' . $success_message . '");</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
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
    <link href="css/developers_how_it_works.css" rel="stylesheet">

    <link rel="stylesheet" href="css/checkbox_style.css">


    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/developers_how_it_works.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/intlTelInput.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function () {
            emailjs.init("cS4MPeWQNKyElWMFu");
        })();
    </script>

</head>


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
                  
                  <li>
                    <a class="page-scroll" href="About Us.php?id=<?php echo $_SESSION['id']; ?>">About Us</a>
                  </li>
                  <li  class="active">
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
                                    <h2 class="title1"><span>HAKIM</span> 2023</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">

                                    <h1 class="title2">Embarking on a lifelong mission of healing and compassion.
                                    </h1>
                                    <!-- <a class="ready-btn page-scroll" href="#"
                                        class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow"
                                        data-toggle="modal" data-target="#getintouch">Get in touch</a> -->
                                    <!-- <a data-toggle="modal" data-target="#getintouch2" href="#">
                                        <button>Get In Touch</button></a> -->
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



        </div>
    </div>
    </div>
    </div>

    <!--!----------------------------------------------------------------------------------------------------------------- -->
    <!--!                                              For Developers                                                           -->
    <!--!----------------------------------------------------------------------------------------------------------------- -->

    <!-- Start for developers Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
           
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Fill Your Year Book Details</h2>
                    </div>
                </div>
            </div>
            <!--beginning of the form to recieve information about developers -->
           <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $userID; ?>">

                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name*" required
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="nname" id="fname" placeholder="Nick Name"
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%;">
                    <input type="text" class="form-control" name="high" id="lname" placeholder="High School*" required
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="number" class="form-control" name="dorm" id="fname" placeholder="Dorm Number" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                 <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="condition" id="" placeholder="Condition on Admission" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
    <input type="text" class="form-control" name="condition_of_discharge" id="condition_of_discharge" placeholder="Condition of Discharge" 
        style="height: 40px; border-radius: 10px" />
    <div class="validation"></div>
</div>

<div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
    <input type="text" class="form-control" name="in_ten_years" id="in_ten_years" placeholder="In Ten Years" 
        style="height: 40px; border-radius: 10px" />
    <div class="validation"></div>
</div>

                  <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="memorable" id="fname" placeholder="Memorable time in med-school" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="worest" id="fname" placeholder="Worst time in med-school:" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="black" id="fname" placeholder="Black lion was" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="doc" id="fname" placeholder="If I hadn’t been a doctor" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="inclination" id="fname" placeholder="Inclination" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                 <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <input type="text" class="form-control" name="ifnot" id="fname" placeholder="If I hadn’t been a doctor" 
                        style="height: 40px;border-radius: 10px" />
                    <div class="validation"></div>
                </div>
                <div class="form-group" style="padding-left: 30%;padding-right: 30%; width: 100%;">
                    <textarea name="lastword"  cols="30" rows="10" placeholder="Last Words" class="form-control"  style="border-radius: 10px;resize: none;"></textarea>
                    
                    <div class="validation"></div>
                </div>
                <div
                    style="width: 100%;padding-left: 30%;padding-right: 30%; display: inline-flex;margin-bottom: 15px;">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*"
                        required style="height: 40px;border-radius: 10px;width: 60%;margin-right: 10px;" />
                    <div class="validation"></div>
                    <input type="tel" name="phone" id="phone" class="form-control"
                        style="border-radius: 10px;height: 40px;" required />
                    <div class="validation"></div>
                </div>
                
                
               
               
                <div class="text-center"><button type="submit" name="submit"
                        style="border-radius: 20px;background-color:blue;width: 150px;height: 40px;font-family: 'Times New Roman', Times, serif;font-size: large;color: white;">SUBMIT</button>
                </div>

            </form>
            <!--end of the form to recieve information about developers -->
            <script src="js/intlTelInput.js"></script>
            <script>
                var input = document.querySelector("#phone");
                window.intlTelInput(input, {
                    
                    utilsScript: "js/utils.js",
                });
            </script>
           


           
            <div class="wellcome-area">
                <div style="background-image: url(img/subscribe/subscribe.jpg);">
                    <div></div>
                    <div>
                        <div class="row">
                            <script src="js/subscribe.js"></script>
                       
                        </div>
                    </div>
                </div>
            </div>




      

            <style>
                #show {
                    display: none;
                }
            </style>
            <script>
                function clickMe() {
                    var text = document.getElementById("show");
                    if (!text.style.display) {
                        text.style.display = "none";
                    }
                    if (text.style.display === "none") {
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                }
            </script>


            <!--!----------------------------------------------------------------------------------------------------------------- -->
            <!--!                                                 FOOTER                                                           -->
            <!--!----------------------------------------------------------------------------------------------------------------- -->

            <!-- Start Footer bottom Area -->

            <footer>

                <div class="bottom-details">
                    <div class="bottom_text">
                        <span class="copyright_text">Copyright ©
                            <script>document.write(new Date().getFullYear());</script> <a href="#">Designed By: Dr. Fitsum Assefa.</a>All rights
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
            <script src="js/checkbox_script.js"></script>

</body>

</html>