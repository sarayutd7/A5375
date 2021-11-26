<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect();
    
    //-----------------------------------
    echo $_POST['ctng_speci'];
    switch($_POST['ctng_speci']){
        case 'urine' : 
            if($_POST['urine_radio']=='ng'){
                $syntax_sql_urine = "urine_specimen = '".$_POST['ctng_speci']."',
                           urine_neisseria = '".$_POST['urine_radio']."', 
                           urine_neisseria_date = '".fixdate_formmat_patter($_POST['date_assay_urint_ng'])."',
                           urine_neisseria_value = '".$_POST['ng_radio']."', 
                           urine_chiamydia = '',
                           urine_chiamydia_date = '',
                           urine_chiamydia_value = '', "; 
                
            }elseif($_POST['urine_radio']=='ct'){
               $syntax_sql_urine = "urine_specimen = '".$_POST['ctng_speci']."',
                           urine_neisseria = '', 
                           urine_neisseria_date = '',
                           urine_neisseria_value = '', 
                           urine_chiamydia = '".$_POST['urine_radio']."',
                           urine_chiamydia_date = '".fixdate_formmat_patter($_POST['date_assay_urint_ct'])."',
                           urine_chiamydia_value = '".$_POST['ct_radio']."', "; 
            }else{
              $syntax_sql_urine = '';
            }
            
            $syntax_sql_rectal = "rectal_swab_specimen = '',
                           rectal_swab_neisseria = '', 
                           rectal_swab_neisseria_date = '',
                           rectal_swab_neisseria_value = '', 
                           rectal_swab_chiamydia = '',
                           rectal_swab_chiamydia_date = '',
                           rectal_swab_chiamydia_value = '', "; 
            break;
         case 'rectal_swab' :  
            if($_POST['rs_radio']=='ng'){
                $syntax_sql_rectal = "rectal_swab_specimen = '".$_POST['ctng_speci']."',
                           rectal_swab_neisseria = '".$_POST['rs_radio']."', 
                           rectal_swab_neisseria_date = '".fixdate_formmat_patter($_POST['date_assay_rs_ng'])."',
                           rectal_swab_neisseria_value = '".$_POST['rectal_swab_ng_radio']."', 
                           rectal_swab_chiamydia = '',
                           rectal_swab_chiamydia_date = '',
                           rectal_swab_chiamydia_value = '', "; 
                
            }elseif($_POST['rs_radio']=='ct'){
               $syntax_sql_rectal = "rectal_swab_specimen = '".$_POST['ctng_speci']."',
                           rectal_swab_neisseria = '', 
                           rectal_swab_neisseria_date = '',
                           rectal_swab_neisseria_value = '', 
                           rectal_swab_chiamydia = '".$_POST['rs_radio']."',
                           rectal_swab_chiamydia_date = '".fixdate_formmat_patter($_POST['date_assay_rs_ct'])."',
                           rectal_swab_chiamydia_value = '".$_POST['rectal_swab_ct_radio']."', ";  
            }else{
              $syntax_sql_rectal = '';
            }
            
            $syntax_sql_urine = "urine_specimen = '',
                           urine_neisseria = '', 
                           urine_neisseria_date = '',
                           urine_neisseria_value = '', 
                           urine_chiamydia = '',
                           urine_chiamydia_date = '',
                           urine_chiamydia_value = '', "; 
            
            break;
        default : $syntax_sql = ""; break;
    }
    $insert_sql = "insert into ctng set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            $syntax_sql_urine $syntax_sql_rectal
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";   
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into ctng_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            
                                            $syntax_sql_urine $syntax_sql_rectal
                                            
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log
    //exit();
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=CTNG");
    
}else{
echo PHPgourl('login.php');
}
?>