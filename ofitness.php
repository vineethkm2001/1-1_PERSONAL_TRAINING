<?php
session_start();
include("connect.php");

?>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = "INSERT INTO ofintess(name, email, phone) VALUE('$name','$email','$phone')";
    $exe = mysqli_query($conn, $query);
    if ($exe) {
        echo "message recieved we'll contact you as soon as possible.";
        header("location:home.php");
    } else {
        echo mysqli_error($conn);
    }
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
    <link rel="stylesheet" href="css/weight.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
<style>

</style>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">VPN 1-1 TRAINING AND FITNESS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>



                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>



                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="account.php" class="nav-link smoothScroll">Account</a>
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
<div class="weight" style="margin-top:200px">
<h1>Overall Fitness</h1>
<p>My style of training includes, positive reinforcement, tough love and spontaneous, yet all be it crude humor. When you are killing it, you’ll know it. When you are slacking, I’ll know it. And whatever random nonsense rolls out of my mouth neither of us know until we know it.
<br><br>    
 

My applied philosophy is knowledge is power. I want to equip you with the fundamentals you’ll need to maintain this active, balanced lifestyle. I focus on primarily body weight, free weight and resistance training and I have regressions and progressions for all fitness levels.</p>
<div>
    <table>
        <tr>
            <td><img src="images\class\o1.jpg" alt="gain" width="260px" height="200px"/></td>
            <td><img src="images\class\o2.jpg" alt="gain"/></td>
        </tr>
        <tr>
            <td><img src="images\class\o3.jpg" alt="gain"/></td>
            <td><img src="images\class\o4.jpg" alt="gain"/></td>
        </tr>
    </table>


</div>

</div>
<div class="fcf-body">
<div id="fcf-form">
    <h3 class="fcf-h3">Register us</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" role="form">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="name" name="name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="email" name="email" class="fcf-form-control" required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your Phone Number</label>
            <div class="fcf-input-group">
                <input type="number" id="phone" name="phone" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block" name="submit" id="sumbit">Register</button>
        </div>

    

    </form>
    </div>
        </div>



