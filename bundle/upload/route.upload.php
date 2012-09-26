<?php

include("controller.upload.php");

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
				ControllerUpload::flushUpload($_FILES['upld']);
				die;
				if(ControllerUpload::flushUpload($_FILES['upld']) === 1){
						header("location:/@/concours/");
				}
				else
					header("location:/@/concours/");
			}
		}
		else
		{
			die('error upload');
		}
	}


}
?>