<?php 

//Start a session
session_start();
include 'php/component.php';
include 'php/createDB.php';


 $database = new CreateDB("Productdb", "Producttb");
if(isset($_POST['add'])){
  // print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){
   $item_array_id= array_column($_SESSION['cart'],"product_id");
   print_r($item_array_id);
    // print_r($_SESSION['cart']);
  if(in_array($_POST['product_id'],$item_array_id)){
    echo "<script>alert('Product is added in the script')</script>";
    echo "<script>window.location='index.php'<script>";
  }else{
   $count= count($_SESSION['cart']);
   $item_array=array(
      'product_id'=>$_POST["product_id"]
   );
   $_SESSION['cart'][$count]=$item_array;
    //print_r($_SESSION['cart']);
  }

  }else{
    $item_array=array(
      'product_id'=>$_POST['product_id']
    );
    //Create new session variable
    $_SESSION['cart'][0]=$item_array;
    print_r($_SESSION['cart']);

  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Shopping Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
     <?php include 'php/header.php';  ?>
      <div class="container">
      <div class="row text-center py-5">
     <?php 
     $result=$database->getData();
     while($row=mysqli_fetch_assoc($result)){
       component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
     }
    //  component("Laptop",519,"./upload/laptop.jpg"); 
    //  component("Laptop",599,"./upload/headphone.jpg");
    //  component("Laptop",599,"./upload/ipadpro.jpg");
    //  component("Laptop",599,"./upload/mobile.jpg");

     
     
     ?>
     
      </div>
      </div>
      
      
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>