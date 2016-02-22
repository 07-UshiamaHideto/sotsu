<?php

//$u_id = $_GET["u_id"];
$u_id = 1;

include("../lib/config.php");
include("../lib/time_select.php");
include("../lib/place_select.php");
?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script type="text/javascript" src="../js/main.js"></script>
<script type="text/javascript" src="../js/ui.js"></script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" >
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="stylesheet" href="../css/form.css" type="text/css">

<form method="post" action="asche_insert_execute.php">
<div class="jumbotron">
<fieldset>
	<legend><span>ルート登録</span></legend>
	<div class="form_area">
		<label><p>タイトル：</p><input type="text" name="title" id="form_title" value="" /></label>
		<label><span>交通：</span>
			<select  name="r_type"><option value="1">徒歩</option selected><option value="2">車</option><option value="3">自転車</option><option value="5">電車</option><option value="6">バス</option><option value="7">飛行機</option><option value="8">船</option><option value="0">その他</option></select><br>
			<span>情報：</span><input type="text" name="r_info" id="form_rinfo" value="" />
		</label>
		<label><span>公開設定：</span><select  name="flg"><option value="1">公開</option selected><option value="0">非公開</option></select></label>
		<label>
			<span>出発　　地点：</span>
			<select name="st_loc"><?php select_place() ?></select>
			<span>　時刻：</span>
			<select name="shur"><?php select_hour(); ?></select> 
			<select name="smin"><?php select_min(); ?></select><br>
			　～　<br>
			<span>到着　　地点：</span>
			<select name="fi_loc"><?php select_place() ?></select>
			<span>　時刻：</span>
			<select name="fhur"><?php select_hour(); ?></select>
			<select name="fmin"><?php select_min(); ?></select>
		</label>
		<label><p>メモ：</p><textarea type="text" name="r_memo" id="form_ta" cols="60" rows="5" /></textarea></label>

	
	<!--	category：<br>　-->

		</label>
		<input type="submit" class="btn_regi" value="登録する"/>
	</div>
</fieldset>
</div>
</form>
