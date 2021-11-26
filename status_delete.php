<?
delete('status',"where status_id = '".$_GET['staid']."'");
echo PHPgourl('index.php?task=viewstatus');
?>