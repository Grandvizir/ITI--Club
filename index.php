<?php
include("User.class.php");

include('repository.class.php');
include("controller.action.php");
include("controller.erreur.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>BDE In'tech Info</title>
	<LINK href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src= "/lib/jquery.js"></script>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>
	</head>
<style type="text/css" media="screen">
	#full{
		background-color: #C0DEED;
		height:1100px;
		width:auto;
		margin:0;
		padding:0;
	}

	#footer{
		background-image:  url(/img/background_reverse.gif) repeat-y scroll left bottom;
		text-align:center;
	padding-top:200px;
	width:auto;


	}

	#header{
		height:180px;
		background: url("/img/header.png") repeat-y scroll left top;
		text-align:center;
		margin-top:-30px;
	}

	#header h1{
		padding-top:60px;
		font-family: "Myriad Pro", Helvetica, Arial, sans-serif;
		color:white;
		font-size:45px;
	}
</style>
	<div id="fulll">
		<div id="header"></div><!-- #header -->
			<?php include("bundle.php"); ?>
	</div>
	<!--div id="footer"><img src= "/img/background_reverse.gif"/></div-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34677811-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>