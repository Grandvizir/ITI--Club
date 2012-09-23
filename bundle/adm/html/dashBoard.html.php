<?php



?>

<style>
.message
{
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.message::after
{
	content: "message";
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
.forum
{
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.forum::after
{
	content: "forum";
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
.user
{
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.user::after
{
	content: "user";
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

.event
{
	position: relative;
	margin: 15px 0;
	padding: 39px 19px 14px;
	background-color: white;
	border: 1px solid #DDD;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.event::after
{
	content: "evenement";
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




	<div class="row show-grid offset1">
              <div class="span3 offset1 user">Il y a actuellement <?php echo count(UserRepository::getAllMembre()); ?> membres</div>
              <div class="span3 offset2 message" style="margin-left:3px;" >Vous avez actuellement <?php echo count(Contact::getAllContact()); ?> message(s) dans votre <a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/message">mailBox</a></div>
    </div>
	<div class="row show-grid">
              <div class="span3 offset1 forum">Vous avez actuellement <?php echo count(Contact::getAllContact()); ?> message(s) dans votre <a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/message">mailBox</a></div>
              <div class="span3 offset2 event" style="margin-left:3px;">Vous avez actuellement <?php echo count(EventRepository::getAllEvent()); ?> &eacute;venement(s) dans votre <a href="/@/administration/token/<?php echo md5($_SERVER['REMOTE_ADDR']);?>/action/event">EventBox</a></div>
    </div>


