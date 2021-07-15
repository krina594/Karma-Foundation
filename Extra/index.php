<?php
error_reporting(0);
include("db.php")
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;

		// Get all the submitted data from the form
		$sql = "INSERT INTO team (t_image) VALUES ('$t_image')";

		// Execute query
		mysqli_query($db, $sql);
		
}
$result = mysqli_query("SELECT * FROM team");
while($data = mysqli_fetch_array($result))
{

	?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
	
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
