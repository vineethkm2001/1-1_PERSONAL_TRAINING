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
                        <a href="login.php" class="nav-link active">Login</a>
                        </li>
                        <li class="nav-item">
                        <a href="register.php" class="nav-link smoothScroll">Register</a>
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


   


     

    

     <!-- SCHEDULE -->
     <section class="schedule section" id="schedule">
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
.reg-input
{
width: 440px;
  height: 50px;
  border: 1px solid #dee0e4;
  margin-bottom: 20px;
  padding: 0 15px;
}

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
	<?php
           session_start();
    include('connect.php');
    // When form submitted, insert values into the database.
    if(isset($_POST['submit'])) {
       
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) ;
        $rowcount = mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        $_SESSION["name"]=$row['username'];
        if($rowcount>0)
        {   $_SESSION['log']=true;
            header('Location:store.php');
            } else {
                echo "           
                    <div id='form'>
                    <h3 class='text'>username and password do not match</h3><br/>
                          <p class='text1'>Click here to <a  class='link' href='login.php'>Login Again</a></p>
                          </div>
                
                
               ";
             
        }
       



    } else {
?>
		

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
     
                <form class="form" method="post" >
           
<h1 style="color:red;font-size:34px;">Login </h1>

        <br>
       


        <input type="text" class="reg-input" name="username" placeholder="Username...." required /><br>
       
       

       <input type="password" class="reg-input" name="password" placeholder="Password..." required><br>
       
        <br>
        <p class="link"> Your data is safe with us.</p>
        <br>
<button type="submit" class="form-control" id="submit-button" name="submit"  >login</button>

 </form>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
        <?php } ?>

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
                        <a href="https://vymaps.com/KE/Platinum-Fitness-Park-1380393108684100/">vpntraining&fitness@gmail.com</a>
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