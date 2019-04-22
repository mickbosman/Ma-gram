<!DOCTYPE html>
<html>
<head>
  <title>Upload een foto!</title>
  <link rel="stylesheet" type="text/css" href="loginStyle.css">
</head>
<body>

  <form method="POST" action="getdata.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>

<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

$imagename=$_FILES["myimage"]["name"];

//Get the content of the image and then add slashes to it
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

header("content-type:image/jpeg");

$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('demo');

$name=$_GET['name'];

$select_image="select * from image_table where imagename='$name'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
 $image_name=$row["imagename"];
 $image_content=$row["imagecontent"];
}
echo $image;

?>

</body>
</html>
