<?php
include 'connection.php';
$feedsql = "SELECT * from feedz where feedid <= 2 ";
$feedsql2 = "SELECT * from feedz where feedid <= 4 and feedid > 2";
$feedsql3 = "SELECT * from feedz where feedid <= 6 and feedid > 4";
$feedshow = $conn->query($feedsql);
$feedshow2 = $conn->query($feedsql2);
$feedshow3 = $conn->query($feedsql3);
 ?>
 <body>
 <style>
    .profileimg img{
        padding:0px;
        margin-left: 5px;
        border-radius: 60%;
    height: 120px;
    width: 100px;
    border: 2px solid gray;
    }
    .profileimg{padding:3px 20px; text-align: center;}
    
.cont{
    max-width: 1170px;
	margin:0px 40px 3px 90px ;
    background-color: transparent;
    border-radius: 5px;
    display:flex;
    flex-direction: row;
    padding:0px 30px;
    border: 2px solid gray;
}
.feedpara{
  margin: 2px 10px;
  font-size: 20px;
  color:darkblue;
  display:flex;
    flex-direction: column;
 
}
span{
  color: brown;
}
.divimg{
    display:flex;
    flex-direction:row;
}.blo{
    display: flex;
    flex-direction: row;
    padding:20px 40px;
}
.levelsta{
    color: orangered;
}
</style>
</head>
    <body>
     
  <div  class="cont"> <?php 
 while($feedyz = mysqli_fetch_assoc($feedshow)):
 ?>
    <div class="blo">    
   
    <div class="divimg">
      <h4 class="profileimg"><img  src="./img/pho.gif" ><br><?= $feedyz['feedname']?></h4>
      <div class="abou">
          <p class="feedpara">I rate your work as <span class="levelsta"> <?= $feedyz['satislevel']?></span>
 </br><?= $feedyz['feedcoment']?>
        </p>

          <h4>Details :</h4>
          <p class="feedpara">Mail id: <?= $feedyz['feedmail']?></p>
          <p class="feedpara">contact number:<?= $feedyz['feednum']?></p>
      </div>
</div>

</div> 
<?php endwhile; ?>
</div>
</div>

<div  class="cont">
<?php 
 while($feedyz = mysqli_fetch_assoc($feedshow2)):
 ?>
    <div class="blo">    
   
    <div class="divimg">
      <h4 class="profileimg"><img  src="./img/pho.gif" ><br><?= $feedyz['feedname']?></h4>
      <div class="abou">
          <p class="feedpara">I rate your work as <span class="levelsta"> <?= $feedyz['satislevel']?></span>
 </br><?= $feedyz['feedcoment']?>
        </p>

          <h4>Details :</h4>
          <p class="feedpara">Mail id: <?= $feedyz['feedmail']?></p>
          <p class="feedpara">contact number:<?= $feedyz['feednum']?></p>
      </div>
</div></div>
<?php endwhile; ?>
</div> 


<div  class="cont">
<?php 
 while($feedyz = mysqli_fetch_assoc($feedshow3)):
 ?>
    <div class="blo">    
   
    <div class="divimg">
      <h4 class="profileimg"><img  src="./img/pho.gif" ><br><?= $feedyz['feedname']?></h4>
      <div class="abou">
          <p class="feedpara">I rate your work as <span class="levelsta"> <?= $feedyz['satislevel']?></span>
 </br><?= $feedyz['feedcoment']?>
        </p>

          <h4>Details :</h4>
          <p class="feedpara">Mail id: <?= $feedyz['feedmail']?></p>
          <p class="feedpara">contact number:<?= $feedyz['feednum']?></p>
      </div>
</div>
<?php endwhile; ?>
</div> </div></div>
