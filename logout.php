<?php
/* 
【機能】
	セッション情報を削除しログイン画面に遷移する。
*/
//①セッションを開始する。

//②セッションを削除する。

//③ログイン画面へ遷移する。
session_start();
$_SESSION = array();
header("Location: login.php");

?>