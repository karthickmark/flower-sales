<?php 
include "connection.php";
$sqlz = "SELECT * from products where featured = 2";
$tworow = $conn->query($sqlz);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajalakshmi Flowers</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addtocart.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style> .fulord{
            text-align: center;
            margin:-20px 0px 0px 0px;
        }
 
</style>
</head>
<body> 
    <?php include 'header.php'; ?>
<br><?php include 'slider.php'; ?>
        <h1>Our Flower Items : </h1>
        <div class="fulord">
        <div class="col">  
    <?php while($product = mysqli_fetch_assoc($tworow)): ?>

<div class="listFlower">
<div class="flowers" >

<form action="addtocart.php" method="post">
    <div class="lists">
    
    <img src="<?= $product['image']?>" height="200px" width="200px"><br>
<p><?= $product['title']?><p>
<h2>1 kg Rs :<span > <?= $product['price'] ?> </span><s><?= $product['floname']?></s></h2>
<input type="hidden" name="idz" value="<?= $product['id'] ?>"/>
<h3><a><input class="subbtn" type="submit" name="addtocart" value="Order Now " /> </a></h3>
</div>
</div></form>

</div><?php endwhile; ?>
</div>
    </div>


    <?php include 'viewfeed.php'; ?>

    <?php include 'footer.php'; ?>
   </body>
</html>
