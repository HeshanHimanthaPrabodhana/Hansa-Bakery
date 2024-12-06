<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'Please fill out all fields!';
   } else {

      $update_data = "UPDATE products SET name='$product_name', price='$product_price', image='$product_image' WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'Product updated successfully!';
         header('location:admin_index.php');
      } else {
         $message[] = 'Could not update the product, please try again!';
      }

   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Product</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>
      body {
         background: url('../images/slideshow-2.jpg') no-repeat center center fixed;
         background-size: cover;
         font-family: Arial, sans-serif;
      }
      .container {
         max-width: 600px;
         margin: 50px auto;
         background: rgba(255, 255, 255, 0.8);
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .title {
         text-align: center;
         margin-bottom: 20px;
         font-size: 24px;
         color: #333;
      }
      .box {
         width: 100%;
         padding: 10px;
         margin: 10px 0;
         border: 1px solid #ddd;
         border-radius: 5px;
      }
      .btn {
         display: inline-block;
         padding: 10px 20px;
         margin: 10px 0;
         border: none;
         background: #28a745;
         color: white;
         border-radius: 5px;
         cursor: pointer;
         text-decoration: none;
         text-align: center;
         transition: background 0.3s;
      }
      .btn:hover {
         background: #218838;
      }
      .message {
         display: block;
         margin: 10px 0;
         padding: 10px;
         background: #f8d7da;
         color: #721c24;
         border: 1px solid #f5c6cb;
         border-radius: 5px;
      }
   </style>
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '<span class="message">'.$msg.'</span>';
      }
   }
?>

<div class="container">

   <div class="admin-product-form-container centered">

      <?php
         $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
         while($row = mysqli_fetch_assoc($select)){
      ?>
   
      <form action="" method="post" enctype="multipart/form-data">
         <h3 class="title">Update the Product</h3>
         <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="Enter the product name">
         <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="Enter the product price">
         <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg">
         <input type="submit" value="Update Product" name="update_product" class="btn">
         <a href="admin_index.php" class="btn">Go Back</a>
      </form>

      <?php }; ?>

   </div>

</div>

</body>
</html>
