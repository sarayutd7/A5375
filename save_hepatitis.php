<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    
    //-----------------------------------
    // ###########################################################
    // ###########################################################
    // ###########################################################
    if($_POST['hbsAg'] == 'Y'){
        $hbsAg_my_mysql = "hbs_ag = '".$_POST['hbsAg_radio']."',
                           date_hbs_ag = '".fixdate_formmat_patter($_POST['date_assa_hbsAg'])."', ";
    }else{
        $hbsAg_my_mysql = "hbs_ag = '',
                           date_hbs_ag = '', ";
    }
    
    if($_POST['hbsAb_cb'] == 'Y'){
        $hbsAb_my_mysql = "hbs_ab = '".$_POST['hbsAb_radio']."',
                           date_hbs_ab = '".fixdate_formmat_patter($_POST['date_assa_hbsAb'])."', ";
    }else{
        $hbsAb_my_mysql = "hbs_ab = '',
                           date_hbs_ab = '', ";
    }
    
    if($_POST['hbcAb_cb'] == 'Y'){
        $hbcAb_my_mysql = "hbc_ab = '".$_POST['hbcAb_radio']."',
                           date_hbc_ab = '".fixdate_formmat_patter($_POST['date_assa_hbcAb'])."', ";
    }else{
        $hbcAb_my_mysql = "hbc_ab = '',
                           date_hbc_ab = '', ";
    }
    // ###########################################################
    // ###########################################################
    // ###########################################################
    if($_POST['antiHCV_cb'] == 'Y'){
        $antiHCV_my_mysql = "anti_hcv = '".$_POST['antiHCV_radio']."',
                           date_anti_hcv = '".fixdate_formmat_patter($_POST['date_ass_antiHCV_cb'])."', ";
    }else{
        $antiHCV_my_mysql = "anti_hcv = '',
                           date_anti_hcv = '', ";
    }
    // ###########################################################
    //-----------------------------------
    $insert_sql = "insert into hepatitis set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            $hbsAg_my_mysql $hbsAb_my_mysql $hbcAb_my_mysql $antiHCV_my_mysql
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";  
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into hepatitis_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',  
                                            
                                            $hbsAg_my_mysql $hbsAb_my_mysql $hbcAb_my_mysql $antiHCV_my_mysql
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log
     
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=Hepatit");
    
}else{
echo PHPgourl('login.php');
}
?>