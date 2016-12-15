<?php
session_start();

if (!isset($_POST))
{
    header("Location:./index.html");
}
//first tokenize and split string
//then add to index
//after that upload file


//here comes upload file:

	$fileadd="";  //this should be gotten from post of get method(file address)
	$filename="";
	$uploaddir="./collection/";
	
	
$target_file = $uploaddir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if file already exists
if (file_exists($target_file)) {
	echo "$target_file";
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "txt") {
	echo "Sorry, text(.txt) files are allowed.";
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$_SESSION["filepath"]=$target_file;
		//session_write_close();
		header ("Location:./readfile.php");
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
session_write_close();
?>