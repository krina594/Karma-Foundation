<?php 
 
include("db.php");
     
if(isset($_GET['site_url']) && isset($_GET['site_name'])){ 
 
$url= $_GET['site_url']; 
$url = urlencode($url); 
$url = mysql_real_escape_string($url); 
$sitename= $_GET['site_name']; 
 
$insertSite_sql = 'INSERT INTO SITE (site_url, site_name) VALUES('. $url. ',' . $sitename. ')'; 
$insertSite= mysql_query($insertSite_sql) or die(mysql_error()); 
 
echo $sitename; 
} else { 
echo 'Error! Please fill all fileds!'; 
} 
?> 
 
//html code 
 
<body> 
 
<div id="insert_response"></div> 
 
<form action="url.php" method="post"> 
<input name="url" type="text" id="url" value=""/> 
<input name="tag" type="text" id="tag" value=""/> 
<input name="adlink" type="text" id="tag" value=""/> 
<input name="linkdisplay" type="text" id="tag" value=""/> 
<input type="submit" name="Submit" value="Insert"/> 
</form> 
 
</body>