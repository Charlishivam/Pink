<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>contact - pink7</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://pink7.thedigitalkranti.com/front-end/css/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="hbc">
        <!-- -------------Start-banner-section-here-------------- -->
        <?php  include('header.php') ;?>

       

        <div class="login">
            <div class="container">
                <div class="main-box">
                    <div class="row align-items-center">
                       <div class="col-12 col-md-6 pl-md-0">
                            <div class="login-image">
                                <img class="w-100" src="https://pink7.thedigitalkranti.com/front-end/images/login-image.png" alt="login-img">
                            </div>
                        </div>
                   
                        <div class="col-12 col-md-6">
                            <div class="login-content">
                                <div class="login-inner-content">
                                                                <h1>Please Login for your account</h1>
                                    <!-- <form action=""> -->
                                        <form action="https://pink7.thedigitalkranti.com/login" class="form-search" method="post" accept-charset="utf-8">
                                        <div class="name-box">
                                            <label for="name">Enter Mobile No</label>
                                            <input type="text" id="mobile" class="form-control" name="mobile">
                                        </div>
                                        <!-- <div class="password-box">
                                            <label for="pass">Password</label>
                                            <input type="password" id="pass" name="pass">
                                        </div> -->
                                        <div class="remember-me text-center">
                                            <div>
                                                <input type="checkbox" name="cb" id="cb">
                                                <label for="cb">Remember me</label>
                                            </div>
                                            <span>Forget password?</span>
                                        </div>
                                        <input type="submit" value="Login" class="btn2">
                                        <div class="text-center mt-3">
                                             <span >Not registered? <a class="pink-color" href="sign-up.php">Sign Up</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









        <!-- ----------script-file----------------- -->
        <script src="js/jquery-3.6.0.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
