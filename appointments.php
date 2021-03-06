<php?
    session_start();
?></php>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>loginform</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    <<!-- **** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">101</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="index.html">About Us</a></li>
                            <li class="scroll-to-section"><a href="index.html">Our Team</a></li>
                            <li class="scroll-to-section"><a href="index.html">Frequently Asked Questions</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="login.html">LogIn</a></li>
                                    <li><a href="signup.html">SignUP</a></li>
                                    <li><a href="admin.php">Admin</a></li>
                                    <li><a href="appointments.phpl">Appointment</a></li>
                                    <li><a href="services.php">Services</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                            <li class=""><a href="login.html">Log Out</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- **** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- **** Header Area End ***** -->
    
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                
                        <div>
                            <!-- table -->
                    <?php 
                        $host = "localhost";
                        $dbuser = "root";
                        $dbpassword = "";
                        $dbname = "101";

                            

                        $mysqli = new mysqli($host,$dbuser, $dbpassword, $dbname); 
                        $query = "SELECT * FROM appointmment";


                        echo '<table class="table table-striped table-responsive" border="0" cellspacing="2" cellpadding="2"> 
                              <tr> 
                                  <th> <font face="Arial">Client Name</font> </td> 
                                  <th> <font face="Arial">Service Provided</font> </td> 
                                  <th> <font face="Arial">Time Scheduled</font> </td>
                                   
                                  
                              </tr>';

                        if ($result = $mysqli->query($query)) {
                            while ($row = $result->fetch_assoc()) {
                                $clientname = $row["clientname"];
                                $serviceprovided = $row["serviceprovided"];
                                $timescheduled = $row["timescheduled"];
                                
                            
                                echo '<tr> 
                                          <td>'.$clientname.'</td> 
                                          <td>'.$serviceprovided.'</td> 
                                          <td>'.$timescheduled.'</td> 
                                          
                                        
                                      </tr>
                                      ';
                            }
                            
                            $result->free();
                            
                        } 
                        
                        ?>
                        </div>
                    </div>
                    
               
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2021 101 Tech Co. 
                
                . Design: <a rel="nofollow" href="#">101 Tech Team</a></p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>