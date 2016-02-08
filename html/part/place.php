<?php

//$u_id = $_GET["u_id"];
$u_id = 1;

//include("lib/config.php");
include("lib/place_db.php");
?>

<div id="place">
	<div class="l_title">気になる場所</div>
	<ul>
		<li id="sch_uid01sid01end" class="pla_ent">
			<div class="s_new">
				場所を登録する
			</div>
		</li>

<!-- 登録場所表示 -->
<?php echo $view ?>

		<li id="sch_uid01sid01end" class="event_nex">
			<div class="s_nex">
				次の5件を見る
			</div>
		</li>
	</ul>
</div>