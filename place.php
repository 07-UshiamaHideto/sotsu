<?php

//$u_id = $_GET["u_id"];
$u_id = 1;

include("lib/config.php");

?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>栞計画　|　場所登録</title>
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
				<div class="sel_title">場所登録</div>
			</div>
<?php include("lib/place_part.php"); ?>
			<div id="map"></div>
			<div id="route">
				<div class="route_t">ルート検索</div>
				<div class="route_search">
					<form>
						<div class="route_form">
							<span class="route_d">出発</span><input type="text" size="20" id="from" value="武蔵境駅" />
							<span class="route_bt">～</span>
							<span class="route_a">到着</span><input type="text" size="20" id="to" value="東京駅" />
						</div>
						<div class="route_form">
							<span class="route_b">経由</span><input type="text" size="20" id="step" value="秋葉原" />
						</div>
						<div class="route_form">
							<input type="button" id="btn1" class="route_btn" value="ルート案内" onclick="dispRoute()" />
						</div>
					</form>
				</div>
				<div class="route_result">
				</div>
			</div>
			</ul>
		</div>

		<div id="r_side">
			<div id="now">
				<div class="now_title">現在(日時) ：</div>
				<div class="now_d">2月18日</div>
				<div class="now_t">8:35</div>
			</div>
			<?php include("part/place.php"); ?>

		</div>
	</div>
<?php include("footer.php"); ?>
</div>
</body>
</html>