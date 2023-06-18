<?php 
include "connection.php";

if(isset($_POST['addtocart'])){
    $id = $_POST['idz'];
    $sql = "SELECT * from products where id = $id ";
    $featured = $conn->query($sql);
}
?> 

<html>
    <link rel="stylesheet" href="./css/addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<body> 

  <?php include "header.php"; ?>
  <?php 
        while($product = mysqli_fetch_assoc($featured)):
        ?>
  <div class="flowers" >
    <form action="function.php" method="post">
    <div class="lists">
    <img src="<?= $product['image']?>" height="200px" width="200px"><br>
<p><?= $product['title']?><p>
<h2>1 kg Rs :<span > <?= $product['price'] ?> </span><s><?= $product['floname']?></s></h2>
Enter The Need in Kg : 
<input type="text" name="qty" /><br>
Enter you name :

<input type="text" name="nameoford" /><br>
Enter your address :
<textarea name="adress"  ></textarea></br>
Enter contact number :
<input type="text" name="contactord" />


<input type="hidden" name="cost" value="<?= $product['price'] ?> "/>
<input type="hidden" name="idz" value="<?= $product['id'] ?>"/>
<input type="hidden" name="namez" value="<?= $product['title'] ?>"/>
<input type="hidden" name="imaz" value="<?= $product['image']?>"/>

<h3><a><input class="subbtn" type="submit" name="func" value="addtocart " /> </a></h3>
    </div></form>
</div></div>

<?php endwhile; ?>

  <?php include "footer.php"; ?>

</body>
</html>