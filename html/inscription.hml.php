<style>
.inscription {
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px 5px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.inscription::after {
content: "Formulaire d'inscription";
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
<div  class="inscription"> 
	<div class="row">
      <div class="span6 offset1">
	<br>
		<form method="post" action="/controller.user.php">
		  <legend>Allez hop, je m'inscris !</legend>
		 
		  <label>Prenom</label>
		  <input name="name" type="text" placeholder="Ton pr&eacute;nom"/>
		  
		  <label>Nom</label>
		  <input name="lastName" type="text" placeholder="Ton nom"/>
		  
		 
		  <label>Mail</label>
		  <input name="mail" type="text" placeholder="Ton email"/>
		  

		  <label>Mot de passe</label>
		  <input name="pwd" type="password" placeholder="Ton mot de passe est crypt&eacute;"/>
		  
		  <label>Mot de passe verif'</label>
		  <input name="pwd2" type="password" placeholder="retape ton mot de passe"/>
		  
		  <label>Ta promo</label>
		  <select name="promo" class="span2">
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="s3">S3</option>
                <option value="s4">S4</option>
                <option value="s5">S5</option>
              </select>
		  <input type="hidden"  name="actionPostInscription" value="1"/>
		  <!--span class="help-block">Une confirmation par mail est exig&eacute;e pour activer votre compte.! (en cours !)</span-->
			<br/>
			<button type="submit" class="btn btn-primary">Valider mes infos</button>
		</form>
	   </div>
</div>
</div>

