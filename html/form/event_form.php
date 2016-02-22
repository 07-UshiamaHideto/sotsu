<?php

//$u_id = $_GET["u_id"];
//$u_id = 1;

//include("lib/config.php");

?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/ui.js"></script>


<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" >
<link rel="stylesheet" href="css/form.css" type="text/css">

<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="form/event_insert_execute.php">
<div class="jumbotron">
<fieldset>
	<legend>イベント登録</legend>
	<label>イベントタイトル<input type="text" name="title" value="" /></label>
	<label>メモ： <br><textarea type="text" name="memo" cols="60" rows="5" /></textarea></label>
	<label>公開設定： <select  name="flg"><option>公開</option selected><option>非公開</option></select></label>
	
<!--	category：<br>　-->
	<label>開始： <input type="text" id="dateps" name="date_s">　～　終了： <input type="text" name="date_e" id="datepe">
	</label>

	<input type="submit" class="btn_regi" value="登録する"/></label>
</fieldset>
</div>
</form>
<!-- Main[End] -->

