<?php
$selected_image = ($_POST["img-selection"]).".jpg";
$error = true;

        $backupDirectory= "graphics/backup/"; 
		$backupFolder = opendir($backupDirectory);
		while (false !== ($backupImage= readdir($backupFolder))) 
		{
	 		if ($backupImage==$selected_image)
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
        
                $temp_file = $backupDirectory.$selected_image;
                $perm_file = $myDirectory.$selected_image;
        
                copy($temp_file, $perm_file);
        
                closedir($myFolder);
                header("Location: admin-backup-image.php?status=success");
                $error = false;
	  		}
        }
        closedir($backupFolder);

        if($error==true){
            header("Location: admin-backup-image.php?status=ERR");
        }
?>