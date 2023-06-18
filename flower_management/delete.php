<?php 
include "connection.php";
if (isset($_POST['del'])) {
    $idd = $_POST['idy'];
    mysqli_query($conn,"DELETE from cart where ordimg='$idd'");
mysqli_close($conn);
header("Location:mycart.php");
}

?>