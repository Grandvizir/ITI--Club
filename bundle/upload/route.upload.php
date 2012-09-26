<?php

if(!empty($_GET['page']) && $_GET['page'] == "concours")
{
	//route !
		$path = "html/no-evenement.html.php";
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
}
?>