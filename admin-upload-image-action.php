<?php
$selected_image = ($_POST["img-selection"]).".jpg";

$max_img_size=  1 * 1024 * 1024; 
if (($_FILES["imagefile"]["type"] == "image/jpeg") && ($_FILES["imagefile"]["size"] < $max_img_size))
{
	if ($_FILES["imagefile"]["error"] > 0) 
 	{ 
		header("Location: admin-upload-image.php?status=ERR");
 	}
 	else
 	{
        $myDirectory= "graphics/"; 
		$myFolder = opendir($myDirectory);
		while (false !== ($myImage= readdir($myFolder))) 
		{
	 		if ($myImage==$selected_image)
	 		{
	  			unlink($myDirectory.$myImage); 
	  			break;
	  		}
		}
		$old_name = $_FILES["imagefile"]["name"];
		$new_name = $selected_image;

		$temp_file = $_FILES["imagefile"]["tmp_name"];
		$perm_file = $myDirectory.$old_name;

        move_uploaded_file($temp_file ,$perm_file);
        
        if(rename($perm_file,$myDirectory.$new_name))
        { 
            header("Location: admin-upload-image.php?status=success");
        }
        closedir($myFolder);      
 	}
}
else 
{ 
    header("Location: admin-upload-image.php?status=ERR");
}
?>