<?
$insert_sql = "insert into status set status_name = '".$_GET['status_name']."', status_create_datetime = '".date('Y-m-d H:i:s')."' ";
insert_data($insert_sql);
echo PHPgourl('index.php?task=viewstatus');
?>