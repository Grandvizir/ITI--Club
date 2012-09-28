
<?php
require_once("/bundle/upload/controller.upload.php");
  //var_dump(ControllerUpload::getAllMin());

?>

<style>
.bs-docs-question {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.bs-docs-question::after {
	content: "logo";
	position: absolute;
	top: -1px;
	left: -1px;
	padding: 3px 7px;
	font-size: 12px;
	font-weight: bold;
	background-color: whiteSmoke;
	border: 1px solid #DDD;
	color: #9DA0A4;
	-webkit-border-radius: 4px 0 4px 0;
	-moz-border-radius: 4px 0 4px 0;
	border-radius: 4px 0 4px 0;
}
</style>
<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li>Concours<span class="divider"></span></li>
</ul>
<p>Notre concours !</p>

<div class="span4 offset5">
	<a href="/@/concours/action/upload/"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Ajouter son logo</button></a>
</div>
<br><br><br>
<div class="bs-docs-question">

<?php

	foreach(ControllerUpload::getAllMin() as $val)
	{
		echo '

			<div class="span1" style="margin-top:5px;">
				<a href="/@/concours/action/view/'.$val->getId().'">
					<img src="/'.$val->getPathMin().'"/>
				</a>
			</div>

			';
	}
?>
</div>