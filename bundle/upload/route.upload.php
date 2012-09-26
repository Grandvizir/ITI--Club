<?php

if(!empty($_GET['page']) && $_GET['page'] == "concours")
{
	//route !
		$path = "html/home.html.php";
		if(!empty($_GET['action']))
		{
			die;
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
		var_dump($_FILES['upld']);
		echo basename($_FILES['upld']['name']);
		//move_uploaded_file($path, $destination);
		die;
	}

}
?>