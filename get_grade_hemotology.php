<?
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
header('Content-Type: text/html; charset=utf-8');
db_connect();
 
?>
