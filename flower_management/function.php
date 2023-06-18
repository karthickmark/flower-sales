<?php 
include "connection.php";
if(isset($_POST['func'])){
  $id = $_POST['idz'];
  $nameo = $_POST['namez'];
  $nameoford = $_POST['nameoford'];
  $adress = $_POST['adress'];
  $contactord = $_POST['contactord'];
  $cost = $_POST['cost'];
  $qty = $_POST['qty'];
  $amount = $cost * $qty ; 

  $sql = "INSERT INTO cart (ordid, ordname, ordcost, ordqty, ordamount, nameoford, addressord, contactord)
					VALUES ('$id', '$nameo', '$cost', '$qty', '$amount', '$nameoford', '$adress', '$contactord')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>window.alert('Order placed Successfully');
            window.location.href = 'listflower.php';
        </script>";
        
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}

}


