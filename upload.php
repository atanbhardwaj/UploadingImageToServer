<?php

$username = $_POST['username'];
$fl = $_FILES['file'];
// echo "Hello ".$username."<br/>";
// echo " <br/>File Name:".$fl['name'];
// echo " <br/>File Type:".$fl['type'];
// echo " <br/>File Size:".$fl['size']."Bytes";
// echo " <br/>File Size:".($fl['size']/1024)."KB";
if(file_exists("photos/".$fl['name']))
{
	echo $fl['name']." Already Exists";
}
else if($fl['type']=="image/jpeg")
{
	echo "Hello ".$username." your file is successfully uploaded";
	move_uploaded_file($fl['tmp_name'], "photos/".$fl['name']);
}
else
{
	echo "File Format Not Valid, Unable to Upload";
}

?>