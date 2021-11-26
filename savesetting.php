<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect(); 
    $update_sql = "update detailproject set  task = '".$_GET['v']."'  where id = '".$_GET['item']."'";
     
    if(update_data($update_sql)){ echo 1; }
    
}
    ?>