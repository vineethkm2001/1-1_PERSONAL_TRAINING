<?php
session_start();
include("connect.php");

?>
<?php
        // include('connect.php');
        // When form submitted, insert values into the database.


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $query = "INSERT INTO contactus(name, email, message) VALUE('$name','$email','$message')";
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

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

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
                        <a href="#home" class="nav-link smoothScroll">Home</a>
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
                    <li><a href="#home" class="fa fa-facebook"></a></li>
                    <li><a href="#home" class="fa fa-twitter"></a></li>
                    <li><a href="#home" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- HERO 
        -->
    <section style="background-color:blue;" class="hero d-flex flex-column justify-content-center align-items-center" id="home">

        <div class=" bg-overlay">
        </div>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">

                        <h6 data-aos="fade-up" class="text-white" data-aos-delay="300">A better way to build a healthy and fit lifestyle!</h6>


                        <h1 style="color:red" data-aos="fade-up" data-aos-delay="500">
                            Upgrade your body at VPN 1-1 TRAINING AND FITNESS
                        </h1>


                    </div>


                    <a href="store.php" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Visit our Store</a>

                </div>
            </div>

        </div>
        </div>
    </section>



    <section style="background-color:silver;" class="about section" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are VPN 1-1 TRAINING AND FITNESS</h2>

                    <p data-aos="fade-up" style="color:black" data-aos-delay="400">
                        is one of the best 1-1 Personal training in the country. It offers Yoga, Weight Gain ,
                        Weight loss, Overall Fintess,Aerobics.
                        We will also sells equipment’s for members and non-members and sell to all the customers.</p>

                    <p data-aos="fade-up" style="color:black" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="#contact" style="color:blue" target="_parent">VPN Training And Fitness</a>, you can <a rel="nofollow" href="#contact" style="color:blue" target="_parent">contact us</a> immediately. Thank you.</p>

                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                            <h2 class="mb-4 text-black" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                            <strong class="d-block" style="color:black;" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                            <strong class="mt-3 d-block" style="color:black;" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                            <p data-aos="fade-up" style="color:black;" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                            <strong class="mt-3 d-block" style="color:black;" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                            <p data-aos="fade-up" style="color:black;" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section style="background-color:grey;" class="feature" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-3 text-black" data-aos="fade-up">New to the VPN 1-1 TRAINING AND FITNESS?</h2>

                    <h6 class="mb-4 text-black" style="color:black" data-aos="fade-up">Your membership is up to 2 months FREE (Rs 6,000 per month)</h6>
                    <a href="register.php" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="600">Join</a>


                </div>


            </div>

        </div>
        </div>
    </section>


    <!-- CLASS -->
    <section style="background-color:silver;" class="class section" id="class">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-5">
                    <h6 data-aos="fade-up" style="color:blue">Get A Perfect Body</h6>

                    <h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="images/class/wgain.jpg" class="img-fluid" alt="Class">

                        <div class="class-info">
                            <h3 class="mb-1">Weight Gain</h3>

                            <span><strong>Trained by</strong> - VINEETH KM</span>
                            <p class="mt-3"></p>
                            <a href="wgain.php"><span class="btn custom-btn bordered mt-3">Rs 5000 </span></a>


                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                        <img src="images/class/wloss.jpg" class="img-fluid" alt="Class" width=450px height=299px>

                        <div class="class-info">
                            <h3 class="mb-1">Weight Loss</h3>

                            <span><strong>Trained by</strong> - Panchami</span>
                            <p class="mt-3"></p>
                            <a href="wloss.php" class="btn custom-btn bordered mt-3">Rs 6600</span></a>


                        </div>
                    </div>
                </div>

                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                        <img src="images/class/ofintess.jpg" class="img-fluid" alt="Class" width=450px height=299px>

                        <div class="class-info">
                            <h3 class="mb-1">Overall Fitness</h3>

                            <span><strong>Trained by</strong> - NAVYA</span>
                            <p class="mt-3"></p>
                            <a href="ofitness.php" class="btn custom-btn bordered mt-3">Rs 7500</span></a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- SCHEDULE -->


    <!-- CONTACT -->
    <section style="background-color:gray;" class="contact section" id="contact">
        
        <div style="background-color:white;" class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="name" placeholder="Name">

                        <input type="email" class="form-control" name="email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>3rd Floor, City Mall, Mangalore ,Karnataka,India,577201</p>
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        </div>
                </div>

            </div>
        </div>
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

    <!-- Modal -->


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>