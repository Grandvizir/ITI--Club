

<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/@/concours/">Concours</a> <span class="divider">/</span></li>
  <li>Visualisation<span class="divider"></span></li>
</ul>
<?php

require_once("bundle/upload/controller.upload.php");

if(!empty($_GET['view']) && is_numeric($_GET['view']))
{

	$obj = FileRepository::getImgById($_GET['view']);
	$membre =  UserRepository::getMembreById($obj->getUserID());

	echo '<div class="btn-group btn-group-horizontal">
					  <button type="button" class="btn"><i class="icon-thumbs-up"></i><small>#POWER</small></button>
					  <a href=""><button type="button" class="btn btn-success"><i class="icon-ok icon-white"></i></button></a>
					</div>';

	echo '
			<br>
			<label>Par '.$membre->getName().'  le '.date('d/m/Y', $obj->getTimeUpload()).'<label><img src="/'.$obj->getPath().'"/>';
}
?>
