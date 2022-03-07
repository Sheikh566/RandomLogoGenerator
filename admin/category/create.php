
<?php 
include "../config/databaseconnect.php";

if (isset($_POST["submit"])) {
    $name = $_POST["txtname"];

    $query = "INSERT INTO `category`(`c_name`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Category Added!')</script>";
    }
    else {
        echo "<script>alert('New category did not not added!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
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
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
</head>
<body class="sub_page">
  <div class="hero_area">
    <?php include "../components/header.php"?>
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Add a category
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="" method="POST">
            <div>
              <input type="text" placeholder="Category Name" name="txtname"/>
            </div>
            <div class="d-flex mt-4">
            <button type="submit" name="submit">
                Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include "../components/footer.php" ?>

  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/custom.js"></script>

</body>

</html>