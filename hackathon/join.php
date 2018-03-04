<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "gym");
   if (isset($_POST['submit'])) {
   $name = htmlentities($_POST['username']);
   $email = htmlentities($_POST['email']);
   $password = htmlentities($_POST['password']);
   //$password2 = htmlentities($_POST['repassword']);
       $gender = htmlentities($_POST['gender']);
       $age = htmlentities($_POST['age']);
       $mobile = htmlentities($_POST['mobile']);
       

    	$password = md5($password);

  	$query = "INSERT INTO user (name, email, password, gender, age, phone) VALUES ('$name', '$email','$password', '$gender', '$age', '$mobile')";
  	$result = mysqli_query($db, $query);
  	if ($result){
      $_SESSION['email'] =$email;
      $_SESSION['name'] = $name;
        $_SESSION['gender'] =$gender;
        $_SESSION['phone'] =$mobile;
        $_SESSION['age'] =$age;
     
    header("location: home.php");
    
    
         
  	}
  }
  else {
     	 $message = "please enter correct password";
    $_SESSION['message'] = $message;
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User &amp; SighUp</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/jquery.bxslider.css" rel="stylesheet" />

    <link href="joinstyle.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="http://www.w3newbie.com/wp-content/uploads/yoga_favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Kavivanar|Monoton" rel="stylesheet">

</head>

<body>


    <div class="wrapper">
        <header class="clearfix" id="header">
            <div class="logo left">
                <h2>Cuts &amp; Curve</h2>
            </div>
            <div class="right">
                <form action="login.php" method="post">
                    <table id="login">
                        <tr class="left">
                            <td><input type="text" id="username" autocomplete="off" value="" placeholder="Enter Name" name="name" required/></td>
                            <td><input type="password" placeholder="Enter password" value="" name="password" required/></td>
                        </tr>
                        <tr class="right">
                            <td>
                                <a href="#">LogIn</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </header>


        <!--        start banner wrapper-->

        <div id="banner-wrapper">

            <!--- Start Navigation -->
            <script src="js/jquery-1.11.2.min.js"></script>
            <script src="js/main.js"></script>
            <!--- For Navigation -->
            <div class="nav-wrap">
                <nav class="navigation">
                    <div class="nav" nav-menu-style="yoga">
                        <ul class="nav-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                           <li><a href="login.php">User Login</a></li>
                            <li><a href="join.php">Join US</a></li>
                            <li><a href="emplogin.php">Trainer LogIN</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </nav>

            </div>
            <!--- End Navigation -->

        </div>
        <!--       end banner wrapper-->


        <div id="form">
            <form action="join.php" method="POST">
                <table>
                    <tr>
                        <td><label for="username">Enter Name</label></td>
                        <td><input type="text" id="username" autocomplete="off" name="username" placeholder="Enter Name" autofocus required/></td>
                    </tr>
                    <tr>
                        <td>Enter Password</td>
                        <td><input type="password" placeholder="Enter password" name="password" required/></td>
                    </tr>
                    <tr>
                        <td>Enter Email</td>
                        <td><input type="email" placeholder="Enter Email" name="email"/></td>
                    </tr>

                    <tr>
                        <td>Enter Mobile No</td>
                        <td><input type="number" name="mobile"  /></td>
                    </tr>
                    <tr>
                        <td>
                            Gender :
                        </td>
                        <td>
                            <input type="text" name="gender" placeholder="gender">
                            
                        </td>
                    </tr>

                    <tr>
                        <td>Select Age</td>

                        <td><input type="text" placeholder="Enter Age" name="age" autofocus/></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="padding:10px 30px;background-color:#D3D3D3;" type="submit" name="submit" value="SignUp" /></td>
                    </tr>
                </table>
            </form>

        </div>
<br><br>
        <!--       start icon and title,text section-->

        <div class="threesection clearfix">
            <section class="one-third left">
                <td>
                    <i class="fa fa-connectdevelop"></i>
                    <h1>OPEN 24/7 </h1>
                    <p style="text-indent: 3%">molestias cupiditate eius asperiores sit. Aspernatur eius deserunt unde cupiditate minima placeat esse.</p>
                </td>
            </section>
            <section class="one-third left">
                <td>
                    <i class="fa fa-skyatlas"></i>
                    <h1>Get Focused</h1>
                    <p style="text-indent: 3%">molestias cupiditate eius asperiores sit. Aspernatur eius deserunt unde cupiditate minima placeat esse.</p>
                </td>
            </section>
            <section class="one-third left">
                <td>
                    <i class="fa fa-globe"></i>
                    <h1>Be Wordly</h1>
                    <p style="text-indent: 3%">molestias cupiditate eius asperiores sit. Aspernatur eius deserunt unde cupiditate minima placeat esse.</p>
                </td>
            </section>
        </div>
        <!--       end icon,table,text-->


        <!--        start heading text image-->

        <h2 class="welcome">Welcome To Cuts And Curves ... </h2>
        <section class="left-col">
            <p style="text-indent:6%">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto rem illum, ipsa praesentium, illo deserunt mollitia hic, suscipit laboriosam perspiciatis tempore animi. Odio fuga ad, modi, praesentium accusamus beatae quam.o deserunt mollitia hic, susciprem ipsum dolor sit amet, consectetur adipisicing elit. Architecto rem illum, ipsa praesentium, illo deserunt mollitia hic, suscipit laboriosam perspiciatis tempore animi. Odio fuga ad, modi, praesentium accusamus beatae quam.</p>
        </section>

        <h1>Advance To Next Level</h1>

        <section class="one-third">
            <h3>Outdoor Stretching</h3>
            <img src="img/girl.png" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum rem voluptatem quos officiis. Nobis iusto dolores reprehenderit est adipisci, possimus suscipit odit ea voluptatem, omnis harum ab molestiae totam pariatur.</p>
        </section>
        <section class="one-third">
            <h3>yoga Classes</h3>
            <img src="img/join.png" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum rem voluptatem quos officiis. Nobis iusto dolores reprehenderit est adipisci, possimus suscipit odit ea voluptatem, omnis harum ab molestiae totam pariatur.</p>
        </section>

        <section class="one-third">
            <h3>Private Sessions</h3>
            <img src="img/strech.png" alt="img">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum rem voluptatem quos officiis. Nobis iusto dolores reprehenderit est adipisci, possimus suscipit odit ea voluptatem, omnis harum ab molestiae totam pariatur.</p>
        </section>

        <div class="clearfix"></div>

        <!--         start footer-->


        <div class="one-third">
            <h3>Contact Us</h3>
            <br>
            <p class="footer-contact">Dharma Yoga <br>
                <strong class="phone">8802****97</strong> <br> 20 D-Central Delhi <br> emailid@gmail.com
            </p>
            <ul class="social">
                <li class="fb"><a href="#">
                <i class="fa fa-facebook-f"></i>
            </a></li>
                <li class="tw"><a href="#">
                <i class="fa fa-twitter"></i>
            </a></li>
                <li class="yt"><a href="#">
                <i class="fa fa-youtube"></i>
            </a></li>
                <li class="link"><a href="#">
                <i class="fa fa-linkedin"></i>
            </a></li>
                <li class="ins"><a href="#">
                <i class="fa fa-instagram"></i>
            </a></li>
            </ul>
        </div>

        <div class="one-third">
            <h3>Our Location</h3>
            <br>
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56042.68496860112!2d77.31056827910156!3d28.6097408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1517316685509"></iframe>
            </div>
        </div>
        <div class="one-third">
            <h3>Our Phylosophy</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam soluta rerum aliquam dolor vero quidem eligendi, nemo quam sint, nam necessitatibus tempora? Voluptatibus minima architecto saepe in ad tempore modi!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam soluta rerum aliquam dolor vero quidem eligendi, nemo quam sint, nam necessitatibus tempora? Voluptatibus minima architecto saepe in ad tempore modi!</p>
        </div>

        <!--   end footer         -->

        <p style="text-align: center;">&copy; 2018 Designed by Lokesh And Robin </p>

    </div>
</body>

</html>