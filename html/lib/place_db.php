<?php

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM place WHERE u_id = " . $u_id . " ORDER BY created ";
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
	$view .= "<li id=\"p_id" . $row["u_id"] . "pid" . $row["p_id"] . "\" class=\"pla_part\">";
	$view .= "<div class=\"s_dt\"><div class=\"sch_im\"></div>";
	$view .= "<div class=\"sch_tra\"><div class=\"ev_area\">";
	$view .= "<div class=\"ev_name\">イベント</div>";
//	$view .= "<div class=\"ev_time\">" . $row["start"] . "</div>";
	$view .= "</div>";
	$view .= "<div class=\"ev_title\">" . $row["p_name"] . "</div>";
	$view .= "</div></div>";
	$view .= "<div class=\"s_root\"><div class=\"eb_l\"></div>";
	$view .= "<div class=\"sch_btn\">";
	$view .= "<form method=\"POST\" action=\"place.php\"><input type=\"hidden\" name=\"p_id\" value=\"". $row["p_id"] ."\"><input type=\"submit\" class=\"purpose\" value=\"詳細\"></form>";
	$view .= "</div>";
	$view .= "</div>";
	$view .= "</li>";
}
// table閉じタグで終了
//$view .= "</table>";
$pdo = null;

?>