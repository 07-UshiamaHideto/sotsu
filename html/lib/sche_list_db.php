<?php

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM ev_s WHERE s_id = " . $s_id . " ORDER BY ev_start";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
// HTML出力用の変数 $view を宣言
$view = "";
// $view に表示する文字列を追記していく
//$view .= "<table>";

foreach($results as $row) {

if (isset($row["e_id"] )){
//	var_dump($row);
	$view .= "<li class=\"tra_part\">";
	$view .= "<div class=\"s_top\"><div class=\"sch_l\"></div></div>";
	$view .= "<div class=\"s_dt\"><div class=\"sch_im\"></div>";
	$view .= "<div class=\"sch_tra\">";
	$view .= "<div class=\"ev_area\">";

$sql = "SELECT * FROM event JOIN e_kind ON event.ek_id=e_kind.ek_id WHERE e_id=" . $row["e_id"] ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$e_value = $stmt->fetch();
//var_dump($results2);

	

	$view .= "<div class=\"ev_name\">" . $e_value["ek_name"] . "</div>";
	$view .= "<div class=\"ev_time\">" . substr($row["ev_start"],11,5) . "</div>";
	$view .= "</div>";
	$view .= "<div class=\"ev_title\">" . $e_value["e_name"] . "</div>";
	$view .= "<div class=\"ev_title\">場所:" . $e_value["adress"] . "</div>";

	$view .= "</div></div>";
	$view .= "<div class=\"s_root\">";
	$view .= "<div class=\"sch_l2\"></div>";
	$view .= "<div class=\"sch_btn\">";
	$view .= "<div class=\"btn\">詳細</div>";
	$view .= "</div></div>";
//	$view .= "<div class=\"s_footer\">";
//	$view .= "</div>";

}

if (isset($row["p_id"] )){

$sql = "SELECT * FROM place WHERE p_id=" . $row["p_id"] ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$p_value = $stmt->fetch();

	$view .= "<li class=\"loc_part\">";
	$view .= "<div class=\"s_dt\">";
	$view .= "<div class=\"sch_place\">" . $p_value["p_name"] . "</div>";
	$view .= "<div class=\"sch_time\">" . substr($row["ev_start"],11,5) . "</div>";
	$view .= "</div>";
	$view .= "<div class=\"s_foot\">";
	$view .= "<div class=\"sch_l\"></div>";
	$view .= "<div class=\"sch_btn\">";
	$view .= "<div class=\"btn\">地図</div>";
	$view .= "<div class=\"btn\">詳細</div>";
	$view .= "</div></div>";


}

if (isset($row["r_id"] )){

$sql = "SELECT * FROM route WHERE r_id=" . $row["r_id"] ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$r_value = $stmt->fetch();

	$view .= "<li class=\"loc_part\">";
	$view .= "<div class=\"s_dt\">";
	$view .= "<div class=\"sch_place\">" . $r_value["r_name"] . "</div>";
	$view .= "<div class=\"sch_time\">" . substr($row["ev_start"],11,5) . "</div>";
	$view .= "</div>";
	$view .= "<div class=\"s_foot\">";
	$view .= "<div class=\"sch_l\"></div>";
	$view .= "<div class=\"sch_btn\">";
	$view .= "<div class=\"btn\">地図</div>";
	$view .= "<div class=\"btn\">詳細</div>";
	$view .= "</div></div>";


}

	$view .= "</li>";

}


$pdo = null;

?>