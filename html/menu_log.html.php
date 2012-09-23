<a href="/"><img src= "/img/pi_logo.png" height="65%" width="65%"/></a>
<br>
<br>


        <ul class="nav nav-list bs-docs-sidenav affix-top">
          <li class="<?php if($var == "bienvenue" || empty($var)) echo "active";?>"><a href="/@/bienvenue/"><i class="icon-chevron-right"></i>Bienvenue</a></li>
          <li class="<?php if($var == "forum") echo "active";?>"><a href="/@/forum/"><i class="icon-chevron-right"></i>Forum</a></li>
          <li class="<?php if($var == "evenement") echo "active";?>"><a href="/@/evenement/"><i class="icon-chevron-right"></i>Evenement</a></li>
          <li class="<?php if($var == "candidature") echo "active";?>"><a href="/@/candidature/"><i class="icon-chevron-right"></i>Candidature</a></li>
          <li class="dropdown-submenu"><a tabindex="-1" href="#"><i class="icon-chevron-right"></i>Mon compte</a>
			<ul class="dropdown-menu">

				<li><a href="/@/compte/"><i class="icon-user"></i><?php echo $_SESSION['name']; ?></li>
				<li><a href="/@/info/"><i class="icon-chevron-right"></i>Modifier mes infos</a></li>
				<li><a href="/@/message/"><i class="icon-chevron-right"></i>Message</a></li>
			<?php
				if(UserRepository::getMembreById($_SESSION['userId'])->getRole() == "admin"){
					$token = md5($_SERVER['REMOTE_ADDR']);
					echo '
						<li><a href="/@/administration/token/'.$token.'"><i class="icon-chevron-right"></i>Administration Web Site</a></li>
						';
				}
			?>
				<li><a href="/controller.action.php?session=close"><i class="icon-chevron-right"></i>deconnection</a></li>
			</ul>
		  </li>

        </ul>