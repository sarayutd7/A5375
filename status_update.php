<?
$update_sql = "update status set status_name = '".$_GET['status_name']."' where status_id = '".$_GET['staid']."' ";
update_data($update_sql);

echo PHPalert("แก้ไขข้อมูลเรียบร้อย");
echo PHPgourl('index.php?task=viewstatus');
?>