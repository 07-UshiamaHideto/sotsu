<?php

include("../lib/config.php");

$view ="";
//$u_id = $_POST["u_id"];

if(isset( $_POST["u_id"])){

$u_id = 1;

 }elseif(isset($_POST["title"])){

$title = $_POST["title"];
$memo = $_POST["memo"];
$flg = $_POST["flg"];
if ($flg =="公開") { $pub = 1; }else{ $pub = 0; }
$date_s = $_POST["date_s"];
$date_e = $_POST["date_e"];

}else{

}
//if () 

$view .=  "title :" .$title;
$view .=  "detail :" .$memo;
$view .=  "flg :" .$pub;
$view .=  "date_s :" .$date_s;
$view .=  "date_e :" .$date_e;

/*
$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
//$sql = "UPDATE enq set u_id = '" . $u_id . "', title = '" . $title . "', detail = '" . $detail . "', age = " . $age . ", update_date = sysdate() " . "WHERE id = " . $id;
$sql = "INSERT INTO event (e_id, u_id, e_name, e_memo, start, finish, pub_show, created, modified) VALUES (NULL," . $u_id . ", '" . $title . "', '" . $memo . "', cast(' . $date_s . ' as date) ,cast(' . $date_e . ' as date), $pub, sysdate(), sysdate()) ";
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
	$view .=  "データが登録できました";
	$view .=  "<a href=event.php>一覧へ</a>";
} else {
	$view .=  "データの登録に失敗しました";
}
$pdo = null;

*/
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
<?php include("../header.php"); ?>
	<div id="main">
<?php echo $view ?>
	</div>
<?php include("../footer.php"); ?>
</div>
</body>
</html