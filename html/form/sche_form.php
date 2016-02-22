<?php

//$u_id = $_GET["u_id"];
//$u_id = 1;

//include("../lib/config.php");

?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script type="text/javascript" src="../js/ui.js"></script>


<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" >
<link rel="stylesheet" href="css/form.css" type="text/css">


<form method="post" action="sche_insert_execute.php">
<div class="jumbotron">
<fieldset>
	<legend><span>スケジュール登録</span></legend>
	<div class="form_area">
		<label><p>スケジュールタイトル：</p><input type="text" name="title" id="form_title" value="" /></label>
		<label><span>公開設定：</span><select  name="flg"><option>公開</option selected><option>非公開</option></select></label>
		<label><span>開始：</span><input type="text" id="dateps" name="date_s">　～　<span>終了：</span><input type="text" name="date_e" id="datepe"></label>
		<label><p>メモ：</p><textarea type="text" name="detail" id="form_ta" cols="60" rows="5" /></textarea></label>
	
	<!--	category：<br>　-->

		</label>
		<input type="submit" class="btn_regi" value="登録する"/>
	</div>
</fieldset>
</div>
</form>
