<?php

//$s_id = $_GET["s_id"];
//$s_id = 2;
//include("config.php");

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM schedule WHERE s_id = " . $s_id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetch();
//var_dump($results);

?>

<ul id="place_d">
	<li class="place_p">
		<div class="place_l">
			<div class="place_t">場所／目的地：</div>
			<div class="place_n">
<?php echo $results["s_name"] ?>
			</div>
		</div>
		<div class="place_r">
			<div id="purpose">編集</div>
		</div>
	</li>
	<li class="place_info">
		<div class="place_l">
			<div class="place_t">情報：</div>
			<div class="place_area">
				東京駅
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
<?php echo $results["s_memo"] ?>
			</div>
		</div>
		<div class="place_r">
			<div id="pur_memo">編集</div>
		</div>
	</li>
</ul>
