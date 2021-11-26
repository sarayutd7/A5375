<?php

ob_start();

session_start();

include('conn/config.php');

include('conn/function.inc.php');

echo "<meta charset=\"UTF-8\">";

if($_SESSION['session_userid']!=''){ 

    db_connect();

    $update_sql = "update cd4 set   visit_code = '".$_POST['visit_code']."',

                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',

                                            time_coll = '".$_POST['time_coll']."',

                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',

                                            time_received = '".$_POST['time_recei']."',

                                            date_assa = '".fixdate_formmat_patter($_POST['date_assay'])."',

                                            time_assa = '".$_POST['time_assay']."',

                                            

                                            gender = '".$_POST['gender']."',

                                            age = '".$_POST['ages']."',

                                            age_month = '".$_POST['month']."',

                                            age_day = '".$_POST['day']."',

                                            total_days_of_life = '".$_POST['datofage']."',

                                            lymphocytes = '".$_POST['lymphocytes']."', 
                                            
                                            cd4_value = '".$_POST['t_cell_cd4']."', 
                                            cd8_value = '".$_POST['t_cell_cd8']."',   

                                            percent_cd4 = '".$_POST['absolute_t_helper_cells']."',  
                                            percent_cd8 = '".$_POST['absolute_t_suppressor_cells']."',   

                                            wbc = '".$_POST['wbc_counts']."', 
                                            
                                            remark = '".$_POST['remark']."', 

                                            who_edit_record = '".$_SESSION['session_user']."',

                                            date_edit_record = '".date('Y-m-d H:i:s')."' 

                                where ptid = '".$_POST['ptid']."' and id_record = '".$_POST['id_record']."' ";  

    update_data($update_sql);

    //--------------------------- log

    $insert_log = "insert into cd4_log set ptid = '".$_POST['pid']."',

                                            visit_code = '".$_POST['visit_code']."',

                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',

                                            time_coll = '".$_POST['time_coll']."',

                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',

                                            time_received = '".$_POST['time_recei']."',

                                            date_assa = '".fixdate_formmat_patter($_POST['date_assay'])."',

                                            time_assa = '".$_POST['time_assay']."',

                                            

                                            gender = '".$_POST['gender']."',

                                            age = '".$_POST['ages']."',

                                            age_month = '".$_POST['month']."',

                                            age_day = '".$_POST['day']."',

                                            total_days_of_life = '".$_POST['datofage']."',

                                            lymphocytes = '".$_POST['lymphocytes']."', 
                                            
                                            cd4_value = '".$_POST['t_cell_cd4']."', 
                                            cd8_value = '".$_POST['t_cell_cd8']."',   

                                            percent_cd4 = '".$_POST['absolute_t_helper_cells']."',  
                                            percent_cd8 = '".$_POST['absolute_t_suppressor_cells']."',   

                                            wbc = '".$_POST['wbc_counts']."', 
                                            
                                            
                                            remark = '".$_POST['remark']."', 

                                            task = 'update',

                                            who_edit_record = '".$_SESSION['session_user']."',

                                            date_edit_record = '".date('Y-m-d H:i:s')."' ";

    insert_data($insert_log);

    //--------------------------- end log

    //exit();

    echo PHPalert('บันทึกข้อมูลเรียบร้อย');

    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=CD4");

    

}else{

echo PHPgourl('login.php');

}

?>