<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<style>
.gallery {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 70%;
  height: 50%;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: light-green;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: yellow;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: left;
}


</style>
</head>
<body>
<h2><center>OUR TEAM MEMBERS</center></h2>
<div class="row">
<?php
$ev_id="";
$qes_event = "SELECT * FROM team ";
$ev_img="";
    
    $qry_event=$conn->query($qes_event);


while ($res_event=$qry_event->fetch_assoc()) 
    
    {
        $imageURL = 'img/'.$res_event["t_image"];
        $name = $res_event["t_name"]; 
        $cno = $res_event["t_cno"];
        $email = $res_event["t_email"];
?>
<div class="responsive">
<div class="gallery">
    
   
      
        <a target="_blank">
            <img src="<?php echo $imageURL; ?>" alt="$alter_img" class="image"/>
            <div class="overlay">
                  <div class="text"><h3>Name:<?php echo $name; ?></h3>
                   Contact number:<?php echo $cno; ?><br>
                  Email: <?php echo $email; ?>
                  </div>

      

        </a>
      </div>
</div>
</div>
</div>


    <?php 

    } 


    ?>
 


</body>
</html>
