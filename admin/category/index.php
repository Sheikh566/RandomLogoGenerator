<?php 
include  "..\..\config\databaseconnect.php";

$result = mysqli_query($conn, "SELECT `c_id`, `c_name` FROM `category`");
if (!$result) {
  echo "<script>alert('Category could not be fetched')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
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
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href= "../../css/bootstrap.css" rel="stylesheet" />
</head>
<body>
  <?php include "../components/headeradmin.php" ?> 
  <div class="container">
    <table class="table">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['c_id']?></td>
            <td><?php echo $row['c_name']?></td>
            <td>
              <a href="./edit.php?id=<?php echo $row['c_id']?>">Edit</a> | 
              <a href="./delete.php?id=<?php echo $row['c_id']?>">Delete</a> 
            </td>
          </tr>
        <?php } ?>
    </table>
    
  </div>
  <button class="create-button">
    <a href="create.php">+</a>
  </button>
  <script type="text/javascript" src="<?php echo "../../js/jquery-3.4.1.min.js"?>"></script>
  <script type="text/javascript" src="<?php echo "../../js/bootstrap.bundle.js"?>"></script>
  <script type="text/javascript" src="<?php echo "../../js/custom.js"?>"></script>
</body>
</html>