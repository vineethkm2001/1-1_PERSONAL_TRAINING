<?php
session_start();
include("connect.php");
if ($_SESSION["log"] == false) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>VPN 1-1 TRAINING AND FITNESS</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">VPN 1-1 TRAINING AND FITNESS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#account" class="nav-link active">Account</a>
                    </li>

                    <li class="nav-item">
                        <a href="store.php" class="nav-link smoothScroll">Store</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">logout</a>
                    </li>
                </ul>
                <ul class="social-icon ml-lg-3">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- SCHEDULE -->
    <section style="background-color:grey;" class="schedule section" id="account">
        <div class="container">
            <div class="row">

                <style>
                    .form {


                        padding: 30px 25px;
                        background: white;

                        width: 500px;

                        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                        margin: 100px auto;
                    }

                    .reg-input {
                        width: 440px;
                        height: 50px;
                        border: 1px solid #dee0e4;
                        margin-bottom: 20px;
                        padding: 0 15px;
                    }
                </style>

                <?php

                include('connect.php');
                if (isset($_POST['save'])) {
                    $username = $_SESSION['name'];
                    $email = ($_POST['email']);
                    $password = ($_POST['pass']);

                    $query1    = "SELECT * FROM `user` WHERE username='$username', email='$email'  AND password='" . md5($password) . "'";
                    $rst1 = mysqli_query($conn, $query1);
                    $cntrw = mysqli_num_rows($rst1);
                    $row = mysqli_fetch_array($rst1);

                    $_SESSION['name'] = $row['username'];
                    if ($cntrw > 0) {
                        $_SESSION['login'] = true;
                    } else {
                        $qry = "UPDATE `user` SET email='$email', password='" . md5($password) . "' WHERE username='$username'";
                        $rst   = mysqli_query($conn, $qry);
                        if ($rst == true) {
                            echo "<div class='form'>
              <h3>Your details have been Updated :)</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
                        } elseif ($rst == false) {
                            echo "<div class='form'>
              <h3>Your details have not been Updated!!! :(</h3><br/>
                    <p class='link'>Click here to <a href='register.php'>register</a> again.</p>
                    </div>";
                        }
                    }
                } else {


                ?>


                    <div class="container rounded bg-white mt-5 mb-5">

                        <div class="row">
                            <div class="col-md-3 border-right">

                            </div>

                            <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">




                                <form method="post">

                                    <h1 class="login-title">Change User Settings</h1>


                                    <input class="reg-input" name="uname" placeholder="<?php echo $_SESSION["name"]; ?>" disabled /><br>


                                    <input class="reg-input" name="email" placeholder="Email...." required /><br>




                                    <input type="password" class="reg-input" name="pass" placeholder="password...." required /><br>
                                    <br>
                                    <input type="submit" name="save" value="Update" class="login-button">
                                    <br>
                                    <br>
                                    <p class="link"> Your data is safe with us.</p>
                                    <br>

                                </form>
                            </div>
                        </div>
                    <?php
                }

                    ?>




    </section>



    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">Copyright &copy; 2022 VPN 1-1 TRAINING AND FITNESS Co.


                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="#">vpntraining&fitness@gmail.com</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i>+91-9110671177</p>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>