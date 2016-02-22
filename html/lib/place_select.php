<?php

$s_place = "";

$pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);
$sql = "SELECT * FROM place WHERE u_id = " . $u_id . " ORDER BY created desc";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

function select_place($results){

foreach($results as $row) {

 $s_place .= "<option value=\"" . $row["p_id"] . "\">" . $row["p_name"] . "</option>";


}

echo $s_place;

}

 ?>