<?php

//require_once(__DIR__ . '/config.php');

//$u_id = $_GET["u_id"];
$u_id = 1;
//include("lib/config.php");
include("lib/event_db.php");

?>

<div id="event">
	<div class="l_title">気になる イベント / 訪問先</div>
	<ul>
		<li class="event_ent">
			<a href="event.php">
			<div class="s_new">イベントを登録する</div>
			</a>
		</li>

<!-- 登録イベント表示 -->
<?php echo $view ?>

		<li id="sch_uid01sid01end" class="event_nex">
			<div class="s_nex">
				次の5件を見る
			</div>
		</li>
	</ul>
</div>