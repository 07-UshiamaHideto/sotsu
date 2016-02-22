<?php

//$u_id = $_GET["u_id"];
$u_id = 1;

if (isset($_POST["e_id"] )){
$e_id = $_POST["e_id"];
}


include("lib/config.php");

?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>栞計画　|　イベントリスト</title>
<meta name="keywords" content="旅,計画,チャット,">
<meta name="description" content="みんなの行きたいを支援するサービス！">

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://cdn.mlkcca.com/v2.0.0/milkcocoa.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=ture&language=ja"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
<script>
map();
</script>
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/index.css" type="text/css">
<link rel="stylesheet" href="css/chat2.css" type="text/css">

</head>
<body>
<div id="wrapper">
<?php include("header.php"); ?>
	<div id="main">
		<div id="l_side">
			<div id="event_plan">
<?php
if (isset($_POST["e_id"] )){
 echo "<div class=\"sel_title\">イベント</div>";
 include("lib/event_part.php");

} else {

 include("form/event_form.php");

}

?>
			</div>
			<div id="map"></div>
		</div>

		<div id="r_side">
			<div id="now">
				<div class="now_title">現在(日時) ：</div>
				<div class="now_d">2月18日</div>
				<div class="now_t">8:35</div>
			</div>
			<?php include("part/event.php"); ?>

		</div>
	</div>
<?php include("footer.php"); ?>
</div>
</body>
</html>