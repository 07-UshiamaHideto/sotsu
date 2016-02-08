<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=dotinstall_todo_app');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '$6Ydnt7p');


class DBController {
	public $u_id = 1;
	public $link = "";
	public $db = "gs_work";

	public function connect(){
		ini_set("mysql.default_socket","/tmp/mysql.sock"); //注意!:  mysql_config --socket などで適宜設定すること

		$this->link = mysql_connect('localhost', 'root', '');
		if (!$this->link) {
		    die('接続できませんでした: ' . mysql_error());
		}
		$sdb = mysql_select_db($this->db,$this->link) or die("データベースの選択に失敗しました。");

		echo 'DBとの接続に成功しました。';
	}

	public function add($user_name, $money){
		$created = date("Y-m-d H:i:s", time());
		//$sql = "SELECT * FROM payments";
  		//$sql = 'INSERT INTO payments (user, money, created) VALUES ("test","150","2015-10-10")';
  		$sql = "INSERT INTO payments (user, money, created) VALUES ('$user_name','$money','$created')";
		$result = mysql_query($sql, $this->link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);
		return $result;
	}

	public function close(){

		mysql_close($this->link);
		echo "DBとの接続を停止。";
	}
}

?>