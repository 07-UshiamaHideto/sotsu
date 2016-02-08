<?php

//$u_id = $_GET["u_id"];
$u_id = 1;
include("lib/config.php");

?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>栞計画</title>
<meta name="keywords" content="旅,計画,チャット,">
<meta name="description" content="みんなの行きたいを支援するサービス！">

<script src="http://maps.google.com/maps/api/js?sensor=ture&language=ja"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
<script>
map();
</script>
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/index.css" type="text/css">

</head>
<body>
<div id="wrapper">
<?php include("header.php"); ?>
	<div id="main">
		<div id="l_side">
			<?php include("part/schedule.php"); ?>
		</div>

		<div id="r_side">
			<?php include("part/event.php"); ?>
			<?php include("part/place.php"); ?>
		</div>
	</div>
<?php include("footer.php"); ?>
</div>
</body>
</html>