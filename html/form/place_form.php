

<link rel="stylesheet" href="css/form.css" type="text/css">

<form method="post" action="place_insert_execute.php">
<div class="jumbotron">
<fieldset>
	<legend>地点登録</legend>
	<label>地点タイトル ※<input type="text" name="title" value="" /></label>
	<label>地点 ※<input type="text" name="title" value="" /></label>
	<label>緯度<input type="text" name="long" value="" />　経度<input type="text" name="lat" value="" /></label>
	<label>メモ： <br><textarea type="text" name="detail" cols="60" rows="5" /></textarea></label>
	<label>公開設定： <select  name="flg"><option>公開</option selected><option>非公開</option></select></label>
	
<!--	category：<br>
	<label>開始： <input type="text" id="dateps" name="date_s">　～　終了： <input type="text" name="date_e" id="datepe">　-->
	</label>

	<input type="submit" value="登録する"/></label>
</fieldset>
</div>
</form>
<!-- Main[End] -->
	</div>
