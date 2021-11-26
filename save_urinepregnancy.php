<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    $insert_sql = "insert into urinepregnancy set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            date_assayed = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            time_assayed = '".$_POST['time_assay']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            quickvue = '".$_POST['quickvue_vaule']."', 
                                            
                                            upt = '".$_POST['upt_vaule']."',
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";  //quickvue_date_assa = '".$_POST['date_ass_quickvue']."', 
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into urinepregnancy_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            date_assayed = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            time_assayed = '".$_POST['time_assay']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            quickvue = '".$_POST['quickvue_vaule']."', 
                                            
                                            upt = '".$_POST['upt_vaule']."',
                                            
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' "; //upt_date_assa = '".$_POST['date_ass_upt']."', quickvue_date_assa = '".$_POST['date_ass_quickvue']."', 
    insert_data($insert_log);
    //--------------------------- end log
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=Urinepregnancy");
    
}else{
echo PHPgourl('login.php');
}
?>