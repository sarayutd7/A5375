<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    $insert_sql = "insert into hiv_eia set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            eia_date_assa = '".fixdate_formmat_patter($_POST['date_assay'])."',
                                            eia_time_assa = '".$_POST['time_assay']."',
                                            
                                            eia = '".$_POST['eia_status']."',
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into hiv_eia_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            eia_date_assa = '".fixdate_formmat_patter($_POST['date_assay'])."',
                                            eia_time_assa = '".$_POST['time_assay']."',
                                            
                                            eia = '".$_POST['eia_status']."',
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log
    //exit();
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=HIVEIA");
    
}else{
echo PHPgourl('login.php');
}
?>