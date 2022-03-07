<?php 
include "../../config/databaseconnect.php";

$categories_result = mysqli_query($conn, "SELECT * FROM `category`");
if (!$categories_result) {
  echo "<script>alert('Couldnt retrieve categories')</script>";
}

if (isset($_POST["submit"])) {
    $name = $_POST["txtname"];
    $price = $_POST["price"];
    $description = $_POST["txtdescription"];
    $quantity = $_POST["quantity"];
    $category = $_POST["c_id"];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $query = "INSERT INTO `products`(`p_name`, `p_price`, `p_description`, `p_quantity`, `p_image`, `c_id`) 
              VALUES ('$name','$price','$description','$quantity','$image','$category')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Product Added!')</script>";
        header("location:show.php");
    }
    else {
        echo "<script>alert('Product couldnot be added!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <?php include "../components/headtag.php" ?>
</head>

<body class="sub_page">
  <div class="hero_area">
    <?php include "../components/headeradmin.php" ?>
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Product Add
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="" method="POST" enctype="multipart/form-data">
            <div>
              <input type="text" placeholder="Name" name="txtname"/>
            </div>
            <div>
              <input type="number" placeholder="Price" name="price"/>
            </div>
            <div>
              <input type="text" placeholder="Description" name="txtdescription" />
            </div>
            <div>
              <input type="number" placeholder="Quantity" name="quantity" />
            </div>
            <div class="dropdown">
              <select name="c_id" class="btn btn-default dropdown-toggle"> 
                <?php 
                  while ($row = mysqli_fetch_assoc($categories_result)) {
                    echo "<option value='".$row['c_id']."'>".$row['c_name']."</option>";
                  }
                ?>
              </select> 
            </div>
            <div>
              <input type="file" placeholder="Image" name="image" />
            </div>
            <div class="d-flex  mt-4 ">
            <button type="submit" name="submit">
                Add
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/custom.js"></script>

</body>

</html>