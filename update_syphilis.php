<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    
    //-----------------------------------
    
    switch($_POST['syphilis_radio']){
        case 'rpr' : 
            $syntax_sql_rpr = "rpr = '".$_POST['syphilis_radio']."',
                                rpr_value = '".$_POST['rpr_radio']."',
                           daterpr = '".fixdate_formmat_patter($_POST['date_assay_rpr'])."', 
                           titerrpr = '".$_POST['rpr_titer']."',
            
            "; 
            $syntax_sql_tppa = "tppa = '',
                            tppa_value = '',
                           datetppa = '',
                           titertppa = '',";
            break;
         case 'tppa' : 
            $syntax_sql_tppa = "tppa = '".$_POST['syphilis_radio']."',
                            tppa_value = '".$_POST['tppa_radio']."',
                           datetppa = '".fixdate_formmat_patter($_POST['date_assay_tppa'])."',
                           titertppa = '".$_POST['tppa_titer']."',
            
            "; 
            $syntax_sql_rpr = "rpr = '',
                            rpr_value = '',
                           daterpr = '', 
                           titerrpr = '',"; 
            break;
        default : $syntax_sql = ""; break;
    }
    $insert_sql = "update syphilis set visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            $syntax_sql_rpr $syntax_sql_tppa
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' 
                                where ptid = '".$_POST['ptid']."' and id_record = '".$_POST['id_record']."'  ";  
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into syphilis_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                             
                                            
                                            $syntax_sql_rpr $syntax_sql_tppa
                                            
                                            remark = '".$_POST['remark']."', 
                                            task = 'update',
                                            who_edit_record = '".$_SESSION['session_user']."',
                                            date_edit_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=Syphil");
    
}else{
echo PHPgourl('login.php');
}
?>