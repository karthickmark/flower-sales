<?php include "connection.php";?>
<html><head>
<style>
    .profileimg img{
        padding:0px;
        margin-left: 5px;
        border-radius: 60%;
    height: 250px;
    width: 200px;
    border: 2px solid gray;
    }
    .profileimg{padding:3px 20px;}
    
.cont{
    max-width: 1170px;
	margin:auto;
    background-color: rgb(255, 255, 255);
    border-radius: 5px;
}h2{
    padding:2px 20px;
}

p{
  margin: 2px 32px;
  padding-bottom: 20px;
}
span{
  color: brown;
}
.divimg{
    display:flex;
    flex-direction:column;
}.blo{
    display: inline-flex;
}
</style>
</head>
    <body>
        <?php include "header.php"; ?>
     
  <div  class="cont"><div class="blo">
    <div class="divimg">
      <h2 class="profileimg"><img  src="./img/pho.gif" ><br>Kumezon</h2>
      <div class="abou">
          <p>A best website for Electronic devices.<br> Buy products from this website,<br>
          very trusted online shoping site</p>

          <h2>Contact Us :</h2>
          <p>G-Mail-id : karuppukaruppu551@gmail.com</p>
          <p>Whatsapp no:7695920474</p>
      </div>
</div>
<div class="divimg">
      <h2 class="profileimg"><img  src="./img/pho.gif" ><br>Elite auto-mobiles </h2>
      <div class="abou">
          <p>A best website for auto-mobiles shoping.<br> Buy auto-mobiles from this website,<br>
          very trusted online shoping site</p>

          <h2>Contact Us :</h2>
          <p>G-Mail-id : markmayan112122@gmail.com</p>
          <p>Whatsapp no:8883806327</p>
      </div>
</div>
<div class="divimg">
      <h2 class="profileimg"><img  src="./img/pho.gif" ><br>Turncart </h2>
      <div class="abou">
          <p>A best website for gaming devices.<br> Buy products from this website,<br>
          very trusted online shoping site</p>

          <h2>Contact Us :</h2>
          <p>G-Mail-id : karthickraja112122@gmail.com</p>
          <p>Whatsapp no:9360199288</p>
      </div>
</div>
</div></div>
		<?php  include "footer.php";   ?>
    </body>