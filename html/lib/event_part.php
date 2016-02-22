<?php

//$s_id = $_GET["s_id"];
//if (isset($_POST["e_id"] )){
//}
//include("config.php");

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM event WHERE e_id = " . $e_id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetch();
//var_dump($results);

?>

<ul id="place_d">
	<li class="place_p">
		<div class="place_l">
			<div class="place_t">イベント：</div>
			<div class="place_n">
<?php echo $results["e_name"] ?>
			</div>
		</div>
		<div class="place_r">
			<div id="purpose">編集</div>
		</div>
	</li>
	<li class="place_info">
		<div class="place_l">
			<div class="place_t">場所：</div>
			<div class="place_area">
<?php echo $results["adress"] ?>
			</div>
		</div>
		<div class="place_r">
			<div id="pur_info">編集</div>
		</div>
	</li>
	<li class="place_tag">
		<div class="place_l">
			<div class="place_t">周辺情報：</div>
			<div class="place_area">
				東京駅
			</div>
		</div>
		<div class="place_r">
			<div id="pur_aro">編集</div>
		</div>
	</li>
	<li class="place_meno">
		<div class="place_l">
			<div class="place_t">メモ：</div>
			<div class="place_area">
<?php echo $results["e_memo"] ?>
			</div>
		</div>
		<div class="place_r">
			<div id="pur_memo">編集</div>
		</div>
	</li>
</ul>
