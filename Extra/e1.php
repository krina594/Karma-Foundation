<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 12px;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 50px;
}

.column img {
  margin-top: 12px;
}

</style>
</head>
<body>
<div class="header-logo"><img class="header-logo__img logo--light" src="assets/images/logo_white.png" alt="logo"/><img class="header-logo__img logo--dark" src="assets/images/logo.png" alt="logo"/></div>
</div>
<h2><center>KARMA EVENTS</center></h2>
<div class="row"> 
<?php
$ev_id="";
$qes_event = "SELECT * FROM events ";
$ev_img="";
  
    $qry_event=$conn->query($qes_event);


while ($res_event=$qry_event->fetch_assoc()) 
    
    {
        $imageURL = 'img/'.$res_event["ev_img"];
        $heading = $res_event["ev_head"]; 
        $place = $res_event["ev_place"];
        $date = $res_event["ev_date"];
?>


    <div class="column">
        <a target="_blank">
            <img src="<?php echo $imageURL; ?>" alt="$alter_img" style="width:40%"/>
           <h3><?php echo $heading; ?></h3>
            <?php echo $place; ?><br>
            <?php echo $date; ?>

        </a>
    </div>


    <?php 

    } 


    ?>

 </div>


</body>
</html>
