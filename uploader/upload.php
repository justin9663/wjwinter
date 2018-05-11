<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//Check if image file is a actual image or fake image
if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false){
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	}else {
		echo "File is not an image."."<br />";
		$uploadOk = 0;
	}
}
// Check if the file already exists
if(file_exists($target_file)){
	echo "Sorry, file already exists. Please rename your file and try uploading again.";
	$uploadOk = 0;
}
//Check the file size
if($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large to upload here.";
}
// Allow certain file types.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf"){
	echo "Sorry only JPG, JPEG, PNG, GIF and PDF files are supported.";
	$uploadOk = 0;
}
//Check if the file was able to be uploaded
if($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
//If everything works out, upload the file and let them know it is all good
} else {
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
		echo "The file " . basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}
?>