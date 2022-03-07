<?php   
include  "../../config/databaseconnect.php";

$result = mysqli_query($conn, "SELECT `p_id`, `p_name`, `p_price`, `p_description`, `p_quantity`, `p_image`, `c_name` 
  FROM `products`
  INNER JOIN `category`
  ON `products`.`c_id` = `category`.`c_id`;"
);
if (!$result) {
    echo "<script>alert('Products could not be fetched')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../components/headtag.php" ?>
</head>
<body>
  <?php include "../components/headeradmin.php" ?>
  <div class="container">
    <div class="heading_container justify-content-center">
      <h2 class="">
        Products
      </h2>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?php echo $row['p_id']?></td>
              <td><?php echo $row['p_name']?></td>
              <td><?php echo $row['p_description']?></td>
              <td><?php echo $row['p_price']?></td>
              <td><?php echo $row['p_quantity']?></td>
              <td><?php echo $row['c_name']?></td>
              <td>
                <img
                  class="img-fluid img-thumbnail img-responsive rounded product-image"
                  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['p_image']); ?>"
                />
              </td>
              <td><a href="edit.php">Edit</a> | <a href="delete.php?id=<?php echo $row['p_id'] ?>" >Delete</a></td>
            </tr>
        <?php } ?>
    </table>

  </div>


  <script type="text/javascript" src="<?php echo "../../js/jquery-3.4.1.min.js"?>"></script>
  <script type="text/javascript" src="<?php echo "../../js/bootstrap.bundle.js"?>"></script>
  <script type="text/javascript" src="<?php echo "../../js/custom.js"?>"></script>
</body>
</html>