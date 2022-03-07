<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include ("config/databaseconnect.php");

if (isset($_POST["submit"])) 
{
    $email = $_POST["txtemail"];
    $password = $_POST["txtpassword"];

    $query = "SELECT * FROM `users` WHERE `u_email` = '$email' && `u_password` = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result);
        $_SESSION['user'] = $user;
        echo "<script>console.log(".$_SESSION['user'].")</script>";
        header("location:index.php");
    }
    else {
        echo "<script>alert('Invalid Email or Password!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fior</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include "components/header.php" ?>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Log In
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="" method="POST">
            <div>
              <input type="email" placeholder="Email" name="txtemail"/>
            </div>
            <div>
              <input type="password" placeholder="Password" name="txtpassword" />
              
            </div>
            <div>
            <div class="d-flex justify-content-between">
              <a href="#">Forgot Password?</a>
              <a href="signup.php">Register</a>
            </div>
            
            <div class="d-flex  mt-4 ">
            <button type="submit" name="submit">
                Log In
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include "components/footer.php" ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>