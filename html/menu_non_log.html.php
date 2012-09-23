<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=212454332171704";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<a href="/"><img src= "/img/pi_logo.png" height="65%" width="65%"/></a>
<br>
<br>


        <ul class="nav nav-list bs-docs-sidenav affix-top">
	   <li class="<?php if($var == "accueil") echo "active";?>"><a href="/@/accueil/"><i class="icon-chevron-right"></i> Accueil</a></li>
          <li class="<?php if($var == "inscription") echo "active";?>"><a href="/@/inscription/"><i class="icon-chevron-right"></i> Inscription</a></li>
          <li class="<?php if($var == "contact") echo "active";?>"><a href="/@/contact/"><i class="icon-chevron-right"></i>Contact</a></li>
          <li class="<?php if($var == "qui-sommes-nou") echo "active";?>" style="border-bottom: 1px solid #EEE;"><a href="/@/qui-sommes-nous/"><i class="icon-chevron-right"></i>Qui sommes nous</a></li>

		  <li style="border-bottom: 1px solid #EEE;"><?php include("connexion.html.php"); ?></li>
		  <li style="padding-top:6px;"><div style="margin-top:3px;" class="fb-like-box" data-href="https://www.facebook.com/StudentComputerExperience" data-width="200" data-height="200" data-show-faces="true" data-border="false" data-stream="false" data-header="false"></div></li>
        </ul>