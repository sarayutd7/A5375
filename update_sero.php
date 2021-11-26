<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    $insert_sql = "update hiv_sero set visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            
                                            date_assayed = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            time_assayed = '".$_POST['time_assay']."', 
                                            
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            gp36 = '".$_POST['gp36']."',
                                            gp140 = '".$_POST['gp140']."',
                                            p31 = '".$_POST['p31']."',
                                            gp160 = '".$_POST['gp160']."',
                                            p24 = '".$_POST['p24']."',
                                            gp41 = '".$_POST['gp41']."',
                                            
                                            hiv1 = '".$_POST['hiv_1']."',
                                            hiv2 = '".$_POST['hiv_2']."',
                                            
                                            interpretation = '".$_POST['assay_obj']."',
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' 
                                where ptid = '".$_POST['ptid']."' and id_record = '".$_POST['id_record']."'  ";  
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into hiv_sero_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            
                                            date_coll = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_coll'])))."',
                                            time_coll = '".$_POST['time_coll']."',
                                            
                                            date_assayed = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_assay'])))."',
                                            time_assayed = '".$_POST['time_assay']."', 
                                            
                                            date_received = '".date('Y-m-d',strtotime(str_replace('/', '-', $_POST['date_recei'])))."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            type_specimen = '".$_POST['dd_specimen']."',
                                            
                                            gp36 = '".$_POST['gp36']."',
                                            gp140 = '".$_POST['gp140']."',
                                            p31 = '".$_POST['p31']."',
                                            gp160 = '".$_POST['gp160']."',
                                            p24 = '".$_POST['p24']."',
                                            gp41 = '".$_POST['gp41']."',
                                            
                                            hiv1 = '".$_POST['hiv_1']."',
                                            hiv2 = '".$_POST['hiv_2']."',
                                            
                                            interpretation = '".$_POST['assay_obj']."',
                                            
                                            remark = '".$_POST['remark']."', 
                                            task = 'update',
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log exit();
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=HIVSero");
    
}else{
echo PHPgourl('login.php');
}
?>