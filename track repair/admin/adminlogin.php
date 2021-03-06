<?php

include("../connection.php");
session_start();
if (!isset($_SESSION['adminloggedin'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['aemail']) && !empty($_POST['apass'])) {
            $lemail = mysqli_real_escape_string($conn, trim($_POST['aemail']));
            $lpass = mysqli_real_escape_string($conn, trim($_POST['apass']));

            $sql = "SELECT admin_email, admin_pass FROM `admin_login` WHERE admin_email= '$lemail' AND admin_pass= '$lpass' LIMIT 1";
            $result = mysqli_query($conn, $sql);

            $num = mysqli_num_rows($result);
            if ($num == 1) {
                $_SESSION['adminloggedin'] = true;
                $_SESSION['lemail'] = $lemail;
                echo "<script> location.href='dashboard.php' </script>";
            } else {
                $remsg = "<div class='alert alert-danger mt-2 font-weight-bold' role='alert'>Enter valid email or password </div>";
            }
        } else {
            $remsg = "<div class='alert alert-danger mt-2 font-weight-bold' role='alert'>Fill all Credentials</div>";
        }
    }
} else {
    echo "<script> location.href='dashboard.php' </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<style>

body {
background-color:darkolivegreen;
}
    </style>
<body>
    <div class="mt-5 text-center" style="font-size: 30px;">
    
        <span>Tech repair Admin Login</span>
    </div>
    <p class="text-center mt-4" style="font-size: 20px;"><i class=" fas fa-user-secret text-danger mr-3"></i>Admin Area</p>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 ">
                <form action="" method="post" class="shadow-lg p-4 rounded">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" name="aemail" id="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">Password</label>
                        <input type="password" name="apass" id="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-info btn-block font-weight-bold shadow-sm">Login</button>
                </form>
                <div>
                    <?php if (isset($remsg)) {
                        echo $remsg;
                    }; ?>
                </div>
                <div class="text-center">
                    <a href="../index.php" class="btn btn-info text-white shadow-sm mt-4">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>