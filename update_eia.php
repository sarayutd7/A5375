<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    $insert_sql = "update hiv_eia set visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            eia_date_assa = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            eia_time_assa = '".$_POST['time_assay']."',
                                            
                                            eia = '".$_POST['eia_status']."',
                                            remark = '".$_POST['remark']."', 
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' 
                                where ptid = '".$_POST['ptid']."' and id_record = '".$_POST['id_record']."' ";
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into hiv_eia_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            eia_date_assa = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            eia_time_assa = '".$_POST['time_assay']."',
                                            
                                            eia = '".$_POST['eia_status']."',
                                            remark = '".$_POST['remark']."', 
                                            task = 'update',
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=HIVEIA");
    
}else{
echo PHPgourl('login.php');
}
?>