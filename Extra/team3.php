<!DOCTYPE html>
<?php
include("db.php");
?>
<html>
<head>
<style>
img {
  width: 50%;
  height: auto;
  vertical-align: middle;
  
}

.pics_in_a_column {
  display: flex;
  border: 5px solid #555;
}

.img1 { flex: 1.3344; }



/* Aaaand just some general styling. */

*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: rebeccapurple;
}

.container {
  background: white;
  margin: 0 auto;
  padding: 5%;
  width: 75%;
}

h1 {
  margin-top: 0;
}

h2 {
  font-weight: normal;
  font-size: 19px;
  margin-bottom: 30px;
}
.pics_in_a_column > div:not(:last-child) {
  margin-right: 2%;
}
</style>
</head>
<body>
  
  <div class='container'>
  
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
  
  <div class='pics_in_a_column'>
    <div class='img1'>
     <img src="<?php echo $imageURL; ?>" alt="$alter_img" />
                <h3>Name:<?php echo $name; ?></h3>
            Contact number:<?php echo $cno; ?><br>
           Email: <?php echo $email; ?>
    </div>
    
  </div>
  <?php } ?>
  
</div>

</body>
</html>