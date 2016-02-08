<?php
//$u_id = $_GET["u_id"];
$u_id = 1;
include("lib/sche_db.php");

?>

<div id="schedule">
	<div class="com_title">
		<span>これからのスケジュール</span>
	</div>
	<ul id="sche_new">
<?php echo $view ?>
		<div id="sche_uid01sid01new" class="new_btn">
			<div class="sche_new">
				新しいスケジュールを登録する
			</div>
		</div>
	</ul>
	<div class="com_title">
		<span>過去のスケジュール</span>
	</div>
	<ul id="sche_arc">
<?php echo $view2 ?>
		<div id="sche_uid01sid01arc" class="arc_btn">
			<div class="sche_arc">
				次の5件を見る
			</div>
		</div>
	</ul>
</div>