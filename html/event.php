<?php
//$u_id = $_GET["u_id"];
$u_id = 1;
$pdo = new PDO("mysql:host=localhost;dbname=shiori_plan;charset=utf8", "root", "");
$sql = "SELECT * FROM event WHERE u_id = " . $u_id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
// HTML出力用の変数 $view を宣言
$view = "";

// $view に表示する文字列を追記していく
//$view .= "<table>";
foreach($results as $row) {
//	var_dump($row);
	$view .= "<li id=\"sch_uid" . $row["u_id"] . "eid" . $row["e_id"] . "\" class=\"eve_part\">";
	$view .= "<div class=\"s_dt\"><div class=\"sch_im\"></div>";
	$view .= "<div class=\"sch_tra\"><div class=\"ev_area\">";
	$view .= "<div class=\"ev_name\">イベント</div>";
	$view .= "<div class=\"ev_time\">" . $row["start"] . "</div>";
	$view .= "</div>";
	$view .= "<div class=\"ev_title\">" . $row["e_name"] . "</div>";
	$view .= "</div></div>";
	$view .= "<div class=\"s_root\"><div class=\"eb_l\"></div>";
	$view .= "<div class=\"sch_btn\"><div class=\"btn\">詳細</div></div>";
	$view .= "</div>";
	$view .= "</li>";
}
// table閉じタグで終了
//$view .= "</table>";
$pdo = null;
?>

<div id="event">
	<div class="l_title">気になる イベント / 訪問先</div>
	<ul>
		<li class="event_ent">
			<div class="s_new">
				イベントを登録する
			</div>
		</li>
<?php echo $view ?>
		<li id="sch_uid01sid01s01" class="eve_part">
			<div class="s_dt">
				<div class="sch_im"></div>
				<div class="sch_tra">
					<div class="ev_area">
						<div class="ev_name">待ち合わせ</div>
						<div class="ev_time">8:30</div>
					</div>
					<div class="ev_title">東京駅南口改札前(構内)</div>
				</div>
			</div>
			<div class="s_root">
				<div class="eb_l"></div>
				<div class="sch_btn">
					<!--  div class="btn">ルート</div  -->
					<div class="btn">詳細</div>
				</div>
			</div>
		</li>
		<li id="sch_uid01sid01s01" class="eve_part">
			<div class="s_dt">
				<div class="sch_im"></div>
				<div class="sch_tra">
					<div class="ev_area">
						<div class="ev_name">待ち合わせ</div>
						<div class="ev_time">8:30</div>
					</div>
					<div class="ev_title">東京駅南口改札前(構内)</div>
				</div>
			</div>
			<div class="s_root">
				<div class="eb_l"></div>
				<div class="sch_btn">
					<!--  div class="btn">ルート</div  -->
					<div class="btn">詳細</div>
				</div>
			</div>
		</li>
		<li id="sch_uid01sid01end" class="event_nex">
			<div class="s_nex">
				次の5件を見る
			</div>
		</li>
	</ul>
</div>