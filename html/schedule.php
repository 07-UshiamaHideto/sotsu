<?php
//$u_id = $_GET["u_id"];
$u_id = 1;
$pdo = new PDO("mysql:host=localhost;dbname=shiori_plan;charset=utf8", "root", "");
$sql = "SELECT * FROM schedule WHERE u_id = " . $u_id;
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
	$view .= "<li class=\"sche_part\"><div class=\"sche_l\">";
	$view .= "<div class=\"sche_title\">スケジュール名：</div>";
	$view .= "<div class=\"sche_name\">" . $row["s_name"] . "</div>";
	$view .= "<div class=\"sche_date\"><span>日程：</span>" . $row["start"] . "</div>";
	$view .= "<div class=\"sche_place\"><span>場所：</span>xxxxxxx</div>";
	$view .= "</div>";
	$view .= "<div class=\"sche_r\"><div class=\"purpose\">詳細</div></div>";
	$view .= "</li>";
}
// table閉じタグで終了
//$view .= "</table>";
$pdo = null;
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
		<li class="sche_part">
			<div class="sche_l">
				<div class="sche_title">スケジュール名：</div>
				<div class="sche_name">新潟散歩</div>
				<div class="sche_date"><span class="">日程：</span>2/18</div>
				<div class="sche_place"><span class="">場所：</span>新潟駅周辺</div>
			</div>
			<div class="sche_r">
				<div class="purpose">詳細</div>
			</div>
		</li>
		<li class="sche_part">
			<div class="sche_l">
				<div class="sche_title">スケジュール名：</div>
				<div class="sche_name">新潟散歩</div>
				<div class="sche_date"><span class="">日程：</span>2/18</div>
				<div class="sche_place"><span class="">場所：</span>新潟駅周辺</div>
			</div>
			<div class="sche_r">
				<div class="purpose">詳細</div>
			</div>
		</li>
		<li class="sche_part">
			<div class="sche_l">
				<div class="sche_title">スケジュール名：</div>
				<div class="sche_name">新潟散歩</div>
				<div class="sche_date"><span class="">日程：</span>2/18</div>
				<div class="sche_place"><span class="">場所：</span>新潟駅周辺</div>
			</div>
			<div class="sche_r">
				<div class="purpose">詳細</div>
			</div>
		</li>
		<li class="sche_part">
			<div class="sche_l">
				<div class="sche_title">スケジュール名：</div>
				<div class="sche_name">新潟散歩</div>
				<div class="sche_date"><span class="">日程：</span>2/18</div>
				<div class="sche_place"><span class="">場所：</span>新潟駅周辺</div>
			</div>
			<div class="sche_r">
				<div class="purpose">詳細</div>
			</div>
		</li>
		<li class="sche_part">
			<div class="sche_l">
				<div class="sche_title">スケジュール名：</div>
				<div class="sche_name">新潟散歩</div>
				<div class="sche_date"><span class="">日程：</span>2/18</div>
				<div class="sche_place"><span class="">場所：</span>新潟駅周辺</div>
			</div>
			<div class="sche_r">
				<div class="purpose">詳細</div>
			</div>
		</li>
		<div id="sche_uid01sid01arc" class="arc_btn">
			<div class="sche_arc">
				次の5件を見る
			</div>
		</div>
	</ul>
</div>