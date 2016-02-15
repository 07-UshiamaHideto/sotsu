<?php

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM schedule WHERE u_id = " . $u_id . " and start > now() ORDER BY start";

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
	$view .= "<div class=\"sche_place\"><span>場所：</span>";

$sql = "SELECT * FROM ev_s JOIN place ON ev_s.p_id=place.p_id WHERE s_id=" . $row["s_id"] . " ORDER BY ev_start";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results2);
foreach($results2 as $row2) {
	$view .= $row2["p_name"] . "　";
}

	$view .= "</div>";
	$view .= "</div>";
	$view .= "<div class=\"sche_r\">";
	$view .= "<form method=\"POST\" action=\"schedule.php\"><input type=\"hidden\" name=\"s_id\" value=\"". $row["s_id"] ."\"><input type=\"submit\" class=\"purpose\" value=\"詳細\"></form>";
	$view .= "</div>";
	$view .= "</li>";
}
// table閉じタグで終了
//$view .= "</table>";

//$sql2 = "date > now()";


$sql =  "SELECT * FROM schedule WHERE u_id = " . $u_id . " and start < now() ORDER BY start LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results_a = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
// HTML出力用の変数 $view を宣言
$view2 = "";
// $view に表示する文字列を追記していく
//$view .= "<table>";
foreach($results_a as $row_a) {
//	var_dump($row);
	$view2 .= "<li class=\"sche_part\"><div class=\"sche_l\">";
	$view2 .= "<div class=\"sche_title\">スケジュール名：</div>";
	$view2 .= "<div class=\"sche_name\">" . $row_a["s_name"] . "</div>";
	$view2 .= "<div class=\"sche_date\"><span>日程：</span>" . $row_a["start"] . "</div>";
	$view2 .= "<div class=\"sche_place\"><span>場所：</span>";

$sql = "SELECT * FROM ev_s JOIN place ON ev_s.p_id=place.p_id WHERE s_id=" . $row_a["s_id"] . " ORDER BY ev_start";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results_a2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results2);
foreach($results_a2 as $row_a2) {
	$view2 .= $row_a2["p_name"] . "　";
}

	$view2 .= "</div>";
	$view2 .= "</div>";
	$view2 .= "<div class=\"sche_r\"><form method=\"POST\" action=\"schedule.php\"><input type=\"hidden\" name=\"s_id\" value=\"". $row["s_id"] ."\"><input type=\"submit\" class=\"purpose\" value=\"詳細\"></form></div>";
	$view2 .= "</li>";
}

?>