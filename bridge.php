<?php 
include 'vendor/chromephp-master/ChromePhp.php';



ChromePhp::log("start php script");

ChromePhp::log($_FILES["file"]["type"]);
$lango=$_POST['lango'];
//echo  $lango.;



if(isset($_FILES["file"]["type"]))
{
	$validextensions = array("jpeg", "jpg", "png","gif");
	$temporary = explode(".", $_FILES["file"]["name"]);
	$file_extension = end($temporary);
	if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/gif") ) && ($_FILES["file"]["size"] < 1e+7)&& in_array($file_extension, $validextensions)) {

		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"];
			header("Location: index.php"); /* Redirect browser */
			exit();
		}
		else
		{
			/*if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
			}
			else
			{*/
				$_FILES["file"]["name"]="input.png";
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "container/".$_FILES['file']['name']; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				//echo "Image Uploaded Successfully...!!";
				//echo "File Name:</b> " . $_FILES["file"]["name"];
				//echo "Type:</b> " . $_FILES["file"]["type"];
				//echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024);
				//echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"];
			/*}*/
		}
	}
	else
	{
		echo "Invalid file Size or Type";
		header("Location: index.php"); /* Redirect browser */
		exit();
	}
}


exec("python core\ocr.py $lango");

header("Location: result.php"); /* Redirect browser */
exit();



?>