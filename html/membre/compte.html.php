<?php
if(is_object($usr) && !is_null($usr))
	{
?>
		<style>
		.bs-docs-compte {
			position: relative;
			margin: 15px 0;
			padding: 39px 19px 14px;
			background-color: white;
			border: 1px solid #DDD;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}
		.bs-docs-compte::after {
			content: "Mon compte";
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
				<li><a href="index.php?page=bienvenue">Home</a> <span class="divider">/</span></li>
				<li><a href="#">Compte</a><span class="divider">/</span></li>		
				<li>Mes informations personnelles<span class="divider"></span></li>		
			</ul>
			<div class="row">
				<div class="span6">
					<div class="bs-docs-compte">
								<h4 style="border-bottom: 1px solid #EEE;"><?php echo $usr->getName()." ".$usr->getLastName();?></h4>

								<p><blockquote>
								<ul class="nav">
									<li><i class="icon-envelope"></i> <?php echo $usr->getMail();?></li>
									<li><i class="icon-book"></i> <?php echo "Promotion ".$usr->getPromo();?></li>
									<li><i class="icon-globe"></i> <?php echo "Ip utilisee ".$usr->getIp();?></li>
									<li><i class="icon-time"></i> <?php echo "Derniere connexion  le ".date('d/m/Y', $usr->getLastConnexion())." &agrave; ".date('H:i:s', $usr->getLastConnexion());?></li>
								</ul>
								<small class="pull-right"></small><br>
								</blockquote>
								</p>
					</div>

				</div>
			</div>
<?php
	}
	else
	{
		echo "you cannont watch this page !";
	}
?>