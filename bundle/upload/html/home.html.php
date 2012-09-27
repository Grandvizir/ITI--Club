
<?php
require_once("/bundle/upload/controller.upload.php");
  //var_dump(ControllerUpload::getAllMin());

?>

<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li>Concours<span class="divider"></span></li>
</ul>
<p>Notre concours !</p>

<div class="span4 offset5">
	<a href="/@/concours/action/upload/"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Ajouter son logo</button></a>
</div>
<br><br><br>


<?php

	foreach(ControllerUpload::getAllMin() as $val)
	{
		echo '<div class="span2"><a href="/@/concours/action/view/'.$val->getId().'"><img src="/'.$val->getPathMin().'"/></a></div>';
	}
?>
