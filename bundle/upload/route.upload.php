<?php

if(!empty($_GET['page']) && $_GET['page'] == "concours")
{
	//route !
		$path = "html/home.html.php";
		if(!empty($_GET['action']))
		{
			switch ($_GET['action']) {
				case "upload":
					$path = "html/upload.html.php";
					break;
				case "home":
					$path = "html/home.html.php";
					break;
				default:
					;
			}
		}

	if(!empty($_FILES['upld']))
	{
		if($_FILES['upld']['error'] === 0)
		{
			if(ControllerUpload::isSecureUpload($_FILES['upld']))
			{
				ControllerUpload::flush($_FILES['upld']);
			}
		}
		else
		{
			die('error upload');
		}
	}


}
?>