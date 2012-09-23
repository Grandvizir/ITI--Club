<?php

?>
<br>
<form class="bs-docs-example form-inline" method="post" action="/controller.user.php">
	<label>Connexion rapide :</label>
	<?php $erno = New ControllerGestionErno(); $erno->controllerGestion(); $erno->destroy();?>
	<input class="input-medium" name="mail" type="text" placeholder="Ton email"/>
	<input class="input-medium" name="pwd" type="password" placeholder="Ton mot de passe"/>
	<input type="hidden" value="1" name="connexionPostUser"/>
	<input style="margin-top:4px;" type="submit" class="btn" value="Connexion"/>
 </form>