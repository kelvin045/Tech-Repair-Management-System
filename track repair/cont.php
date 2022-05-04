<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech repair </title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <h>COMPUTER TECH REPAIR MANAGEMENT SYSTEM </h>
    <h2>CONTACT US </h2>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-4 fixed-top">
        <a href="index.php" class="navbar-brand">Tech repair Management System </a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="requester/requesterlogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav> <!-- End Navigation -->

    <!-- Start Header -->

    <header >

       
            

    </header>

    <!-- End Header -->

   
    

    <!-- Start Contact Us -->
    <div class="container" id="contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <?php include("contactform.php"); ?>
            <!-- ContactForm -->
           
        </div>
    </div>
    <!-- End Contatc US -->

    <!-- Start Footer -->
    <footer class="container-fluid bg-dark mt-5">
        <div class="container text-white">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">Follow Us: </span>
                    <<p>
                    <a href="" class="pr-2"><i class="fab fa-facebook-f text-danger"></i></a>
                    <p>
                    <a href="" class="pr-2"><i class="fab fa-twitter text-danger"></i></a>
                    <p>
                    <a href="" class="pr-2"><i class="fab fa-instagram text-danger"></i></a>
            
                    <p>
                    <span>Designed By- Kelvin kania &copy; 2022</span>
                    <p>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>