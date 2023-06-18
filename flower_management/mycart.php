<?php 
include "connection.php";
$sql = "SELECT * from cart ";
$featured = $conn->query($sql);
$pro = 0;
?> 
    <html>
    <link rel="stylesheet" href="./css/addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<body> 

  <?php include "header.php"; ?>
 
  <div class="contain">
  
<div class="sidebar">

                <div class="head">My Cart</div>
                <?php 
        while($product = mysqli_fetch_assoc($featured)):
        ?>
         <div class='mm'>
                   <h5><?= $product['ordname']?></h5>
                    
                   <ul>
                <li>
                <h6><?= $product['ordqty']?></h6></li> <li><b>X</b> </li>
                <li> <h6><?= $product['ordcost']?></h6></li> <li><b>=</b> </li>
                <li> <h6><?= $product['ordamount']?></h6></li>
                <li><form action="delete.php" method="post">
                <input type="hidden" name="idy" value="<?= $product['ordimg'] ?>"/>
                <input class="subbtn" type="submit" name="del" value="Delete" /> </form></li>
                </ul>
                </div><input type="hidden" value="<?= $pro += $product['ordamount']?>"/>
                
                <?php endwhile; ?>
                <div class="foot">
                </div><h3>Total</h3>
                <h2 id="total"> <?php echo ''.$pro.''; ?></h2>
            </div>
            
        </div>
        
        </div>
            <?php include "footer.php";?>

</body>
</html>