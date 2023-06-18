<?php 
include "connection.php";
$sql = "SELECT * from products where featured = 1";
$sqlz = "SELECT * from products where featured = 2";
$sqly = "SELECT * from products where featured = 3";
$featured = $conn->query($sql);
$tworow = $conn->query($sqlz);
$threerow = $conn->query($sqly);
?>
<head>
   <title>Rajalakshmi Flowers</title>
    <link rel="stylesheet" href="css/addtocart.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .fulord{
            text-align: center;
        }
    </style>
</head>
<body> 
    <?php include 'header.php'; ?>
    <h1>Flowers List :</h1>
    <div class="fulord">
    <div class="col">  
    <?php while($product = mysqli_fetch_assoc($featured)): ?>

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


<div class="col">  
    <?php while($product = mysqli_fetch_assoc($threerow)): ?>

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
<?php include 'footer.php'; ?>
</body>