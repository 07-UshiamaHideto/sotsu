<?php

//$u_id = $_GET["u_id"];
$u_id = 1;

$s_id = $_POST["s_id"];

include("lib/config.php");

?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>栞計画　|　スケジュール</title>
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
<link rel="stylesheet" href="css/chat2.css" type="text/css">

</head>
<body>
<div id="wrapper">
<?php include("header.php"); ?>
	<div id="main">
		<div id="l_side">
			<div id="event_plan">
				<div class="sel_title">スケジュール</div>
			</div>
			<div id="map"></div>
<?php include("lib/sche_part.php"); ?>
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
			<div id="c_menber">
				<div class="c_men_text">メンバー <span>（5人)</span></div>
				<ul class="c_men_area">
					<li class="icon_1">山田</li>
					<li class="icon_2">ムラ</li>
					<li class="icon_3">東</li>
					<li class="icon_4">とく</li>
				</ul>
			</div>

			<div class="postarea cf">

				<div class="postarea-text">
					<textarea name="" id="content" cols="30" rows="5" placeholder="Enterで投稿"></textarea>
				</div>
				<div class="postarea-bu">
					<button id="post" class="postarea-button">投稿する</button>
				</div>
				<div class="postarea-under">
					<div class="switch_text">
						現在位置情報付加：
					</div>
					<div class="switch">
						<input id="switch" checked type="checkbox">
							<label for="switch"></label>
					</div>
				</div>
			</div>

			<div id="messages" class="content">
				<ul id="mes">
					<li id="chat_uid01sid01_20150218083045" class="chat_my">
						<div class="c_menber icon_my">自分</div>
						<div class="c_l">
							<div class="c_mes my_part">
								<div class="c_time my_me">
									2015/2/18 8:22:45 <span>(15分前)</span>
								</div>
								<div class="c_message my_me">
									集合地点に到着！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>
						</div>
					</li>
					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>
					<li id="chat_uid01sid01_20150218083045" class="chat_my">
						<div class="c_menber icon_my">自分</div>
						<div class="c_l">
							<div class="c_mes my_part">
								<div class="c_time my_me">
									2015/2/18 8:22:45 <span>(15分前)</span>
								</div>
								<div class="c_message my_me">
									集合地点に到着！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>
						</div>
					</li>
					<li id="chat_uid04sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_4">とく</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>
					<li id="chat_uid01sid01_20150218083045" class="chat_my">
						<div class="c_menber icon_my">自分</div>
						<div class="c_l">
							<div class="c_mes my_part">
								<div class="c_time my_me">
									2015/2/18 8:22:45 <span>(15分前)</span>
								</div>
								<div class="c_message my_me">
									集合地点に到着！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>
						</div>
					</li>
					<li id="chat_uid04sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_4">とく</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>
					<li id="chat_uid04sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_4">とく</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>					<li id="chat_uid02sid01_20150218083045" class="chat_ot">
						<div class="c_menber icon_1">山田</div>
						<div class="c_l">
							<div class="c_mes ot_part">
								<div class="c_time">
									2015/2/18 8:22:45 <span>(10分前)</span>
								</div>
								<div class="c_message">
									秋葉原駅で乗り換え中！
								</div>
							</div>
							<div class="c_btn">
								<div class="loc_y"></div>
								<div class="c_btn">
									位置<br>表示
							</div>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php include("footer.php"); ?>
</div>
</body>
</html>