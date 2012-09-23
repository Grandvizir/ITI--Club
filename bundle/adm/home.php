<?php

include("/bundle/adm/adm.controller.action.php");

$var= "home";
if(!empty($_GET['action']))
{
	$var = $_GET['action'];
}

?>
	<div class="navbar" style="margin-top:15px;">
              <div class="navbar-inner">
               <a class="brand" href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/home/">Adm</a>
                <ul class="nav">
                 <li class="<?php if($var == "home") echo "active";?>"><a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/home">Home</a></li>
                  <li class="divider-vertical"></li>
                  <li class="<?php if($var == "user") echo "active";?>"><a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/user">User</a></li>
                  <li class="divider-vertical"></li>
                  <li class="<?php if($var == "event") echo "active";?>"><a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/event">Ev&eacute;nememt</a></li>
                  <li class="divider-vertical"></li>
                  <li class="<?php if($var == "message") echo "active";?>"><a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/message">message</a></li>
                  <li class="divider-vertical"></li>
                </ul>
              </div>
            </div>

<div class="">
<?php include($pathModul); ?>
</div>