<style>
.bs-docs-contact {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px 5px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.bs-docs-contact::after {
content: "Formulaire de contact";
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
<label><?php $erno = New ControllerGestionErno(); $erno->controllerGestion(); $erno->destroy()?></label>
<div  class="bs-docs-contact">
<div class="row">
      <div class="span6 offset1">
	<br>
		<form method="post" action="/controller.user.php">
		  <legend>Nous contacter</legend>
		  
		  <label>Prenom</label>
		  <input name="name" type="text" placeholder="Ton pr&eacute;nom"/>
		  
		  <label>Nom</label>
		  <input name="lastName" type="text" placeholder="Ton nom"/>
		  
		 
		  <label>Mail</label>
		  <input name="mail" type="text" placeholder="Ton email"/>
		  

		  <label>Votre message</label>
		  <textarea name="contenu" style="height: 151px; width: 427px;"></textarea>
		  <input type="hidden"  name="actionPostContact" value="1"/>
		  <br/>
			<button type="submit" class="btn btn-primary">Valider mes infos</button>
		</form>
		</div>
	</div>
</div>
