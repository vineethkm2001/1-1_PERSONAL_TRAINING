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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                <a href="home.php" class="nav-link smoothScroll">Home</a>
                        </li>
                        <li class="nav-item">
                        <a href="login.php" class="nav-link smoothScroll">Login</a>
                        </li>
                        <li class="nav-item">
                        <a href="register.php" class="nav-link active">Register</a>
                        </li>
                        <li class="nav-item">
                        <a href="store.php" class="nav-link smoothScroll">Store</a>
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


    <style>
.form {


padding: 30px 25px;
background: white;

width: 500px;

box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
margin: 100px auto;
}
.reg-input
{
width: 440px;
  height: 50px;
  border: 1px solid #dee0e4;
  margin-bottom: 20px;
  padding: 0 15px;
}



</style> 
	<?php
           
    include('connect.php');
    // When form submitted, insert values into the database.
    if(isset($_POST['submit'])) {
        $fname=($_POST['fname']);
		$lname=($_POST['lname']);
        $email    = ($_POST['email']);
        $phone=($_POST['phone']);
        $postcode=($_POST['postcode']);
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $regdate = date("Y-m-d H:i:s");
        
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result1 = mysqli_query($conn, $query) ;
        $rowcount = mysqli_num_rows($result1);
        $row=mysqli_fetch_array($result1);
        

        
        $_SESSION['name']=$row['username'];
        if($rowcount>0)

        {   $_SESSION['log']=true;
            echo "
            <style>
            .text {
      
      
               color:red;
               font-size:30px;
                
                         }
                         .text1 {
      
                            font-size:26px;
                            color:black;
                             
                                      }
                         .link {
      
                            font-size:26px;
                            color:blue;
                             
                                      }
                </style>
            
            <div class='form'>
                  <h3 class='text'>The username already exists/ you can login if this is your account</h3><br/>
                  <p class='text1'>Click here to <a class='link' href='signup.php'>SignUP</a> again.</p>
                  <p class='text1'>Click here to <a class='link'href='login.php'>Login to your account</a></p>
                  </div>";
            } else {
                $query    = "INSERT into `user` (fname,lname, email, phone, Postcode, username,
                 password, userr_regdate)
                     VALUES ('$fname','$lname','$email','$phone','$postcode','$username', 
                     '" . md5($password) . "', '$regdate')";

       
             if ( $result   = mysqli_query($conn, $query)) {
           header('Location:login.php');
                  
        } else {
            echo "
            <style>
            .text {
      
      
               color:red;
               font-size:30px;
                
                         }
                         .text1 {
      
                            font-size:26px;
                            color:black;
                             
                                      }
                         .link {
      
                            font-size:26px;
                            color:blue;
                             
                                      }
                </style>
                <div class='form'>
                <h3 class='text'>Required fields are missing.</h3><br/>
                  <p  class='text1'>Click here to <a class='link'href='register.php'>register</a> again.</p>
                  </div>          
            
           ";
         
            
        }
        }
       



    } else {
?>
		

    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the VPN 1-1 TRAINING AND FITNESS?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Your membership is up to 2 months FREE (Rs 6,000 per month)</h6>
                  
                     
                </div>
   
  
                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     
                <form class="form" method="post" >
<h1 style="color:red;font-size:34px;">Signup </h1>

        <br>
        <input type="text" class="reg-input" name="fname" placeholder="First Name...." required /><br>
       
		<input type="text" class="reg-input" name="lname" placeholder="Last Name...." required /><br>
       
       
        
        <input type="text" class="reg-input" name="email" placeholder="Email Adress...." required><br>
       
    
        <input type="text" class="reg-input" name="phone" placeholder="Phone...." required /><br>
        
      
        <input type="text" class="reg-input" name="postcode" placeholder="PostCode...." required /><br>
        


        <input type="text" class="reg-input" name="username" placeholder="Username...." required /><br>
       
       

        <input type="password" class="reg-input" name="password" placeholder="Password..." required><br>
        <br>
        <button type="submit" class="form-control" id="submit-button" name="submit"  >Join</button>
        <br>
        <br>
        <p class="link"> Your data is safe with us.</p>
        <br>
    </form>
                          </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>

    <?php
    }
?>
     

      


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
                        <a href="https://vymaps.com/KE/Platinum-Fitness-Park-1380393108684100/">vpntraining&fitness@gmail.com</a>
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



