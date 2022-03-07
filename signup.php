
<?php 
include ("config/databaseconnect.php");

if (isset($_POST["submit"])) {
    $name = $_POST["txtname"];
    $email = $_POST["txtemail"];
    $phone = $_POST["txtphone"];
    $password = $_POST["txtpassword"];

    $query = "INSERT INTO `users`(`u_name`, `u_email`, `u_phone`, `u_password`) VALUES ('$name','$email','$phone','$password')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Registered!')</script>";
    }
    else {
        echo "<script>alert('Registeration Failed!')</script>";
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
    <?php include("components/header.php") ?>
  </div>
    <?php 
    include ("config/databaseconnect.php");

    if (isset($_POST["submit"])) {
        $name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $phone = $_POST["txtphone"];
        $password = $_POST["txtpassword"];

        $query = "INSERT INTO `users`(`u_name`, `u_email`, `u_phone`, `u_password`) VALUES ('$name','$email','$phone','$password')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Registered!')</script>";
        }
        else {
            echo "<script>alert('Registeration Failed!')</script>";
        }
    }
    ?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Sign Up
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="" method="POST">
            <div>
              <input type="text" placeholder="Name" name="txtname"/>
            </div>
            <div>
              <input type="email" placeholder="Email" name="txtemail"/>
            </div>
            <div>
              <input type="tel" placeholder="Phone Number" name="txtphone" />
            </div>
            <div>
              <input type="password" placeholder="Password" name="txtpassword" />
            </div>
            <div class="d-flex  mt-4 ">
            <button type="submit" name="submit">
                Register
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include("components/footer.php") ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>