<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect(); 
    $update_sql = "update labmenu set  active = '".$_GET['v']."'  where labID = '".$_GET['Lab']."'";
    update_data($update_sql);
}
    ?>