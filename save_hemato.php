<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect(); 
    $insert_sql = "insert into hemato set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            date_assayed = '".fixdate_formmat_patter($_POST['date_assay'])."',
                                            time_assayed = '".$_POST['time_assay']."',
                                            
                                            gender = '".$_POST['gender']."',
                                            age = '".$_POST['ages']."',
                                            age_month = '".$_POST['month']."',
                                            age_day = '".$_POST['day']."',
                                            total_days_of_life = '".$_POST['datofage']."',
                                            
                                            hemoglobin = '".$_POST['hemoglobin']."',
                                            hemoglobin_gr  = '".$_POST['hemoglobin_grade']."',
                                            hematocrit = '".$_POST['hematocrit']."',
                                            hematocrit_gr = '".$_POST['hematocrit_grade']."',
                                            mcv = '".$_POST['mcv']."',
                                            mcv_gr = '".$_POST['mcv_grade']."',
                                            platelets = '".$_POST['platelets']."',
                                            platelets_gr = '".$_POST['platelets_grade']."',
                                            wbc = '".$_POST['wbc']."',
                                            wbc_gr = '".$_POST['wbc_grade']."',
                                            
                                            neutrophils = '".$_POST['neutrophils']."',
                                            neutrophils_gr = '".$_POST['neutrophils_grade']."',
                                            absolute_neutrophil = '".$_POST['absolute_neutrophil']."',
                                            absolute_neutrophil_gr = '".$_POST['absolute_neutrophil_grade']."',
                                            
                                            lymphocyte = '".$_POST['lymphocyte']."',
                                            lymphocyte_gr = '".$_POST['lymphocyte_grade']."',
                                            atypical_lymphocyte = '".$_POST['atypical_lymphocyte']."',
                                            atypical_lymphocyte_gr = '".$_POST['atypical_lymphocyte_grade']."',
                                            
                                            monocyte = '".$_POST['monocyte']."',
                                            monocyte_gr = '".$_POST['monocyte_grade']."',
                                            absolute_monocyte = '".$_POST['absolute_monocyte']."',
                                            absolute_monocyte_gr = '".$_POST['absolute_monocyte_grade']."',
                                            
                                            eosinophils = '".$_POST['eosinophils']."',
                                            eosinophils_gr = '".$_POST['eosinophils_grade']."',
                                            absolute_eosinophil = '".$_POST['absolute_eosinophil']."',
                                            absolute_eosinophil_gr = '".$_POST['absolute_eosinophil_grade']."',
                                            
                                            basophils = '".$_POST['basophils']."',
                                            basophils_gr = '".$_POST['basophils_grade']."',
                                            absolute_basophil = '".$_POST['absolute_basophil']."',
                                            absolute_basophil_gr = '".$_POST['absolute_basophil_grade']."', 
                                            
                                            rbc = '".$_POST['rbc']."',
                                            rbc_gr = '".$_POST['rbc_grade']."', 
                                             
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into hemato_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            date_assayed = '".fixdate_formmat_patter($_POST['date_assay'])."',
                                            time_assayed = '".$_POST['time_assay']."',
                                            
                                            gender = '".$_POST['gender']."',
                                            age = '".$_POST['ages']."',
                                            age_month = '".$_POST['ages']."',
                                            age_day = '".$_POST['ages']."',
                                            total_days_of_life = '".$_POST['ages']."',
                                            
                                            hemoglobin = '".$_POST['hemoglobin']."',
                                            hemoglobin_gr  = '".$_POST['hemoglobin_grade']."',
                                            hematocrit = '".$_POST['hematocrit']."',
                                            hematocrit_gr = '".$_POST['hematocrit_grade']."',
                                            mcv = '".$_POST['mcv']."',
                                            mcv_gr = '".$_POST['mcv_grade']."',
                                            platelets = '".$_POST['platelets']."',
                                            platelets_gr = '".$_POST['platelets_grade']."',
                                            wbc = '".$_POST['wbc']."',
                                            wbc_gr = '".$_POST['wbc_grade']."',
                                            
                                            neutrophils = '".$_POST['neutrophils']."',
                                            neutrophils_gr = '".$_POST['neutrophils_grade']."',
                                            absolute_neutrophil = '".$_POST['absolute_neutrophil']."',
                                            absolute_neutrophil_gr = '".$_POST['absolute_neutrophil_grade']."',
                                            
                                            lymphocyte = '".$_POST['lymphocyte']."',
                                            lymphocyte_gr = '".$_POST['lymphocyte_grade']."',
                                            atypical_lymphocyte = '".$_POST['atypical_lymphocyte']."',
                                            atypical_lymphocyte_gr = '".$_POST['atypical_lymphocyte_grade']."',
                                            
                                            monocyte = '".$_POST['monocyte']."',
                                            monocyte_gr = '".$_POST['monocyte_grade']."',
                                            absolute_monocyte = '".$_POST['absolute_monocyte']."',
                                            absolute_monocyte_gr = '".$_POST['absolute_monocyte_grade']."',
                                            
                                            eosinophils = '".$_POST['eosinophils']."',
                                            eosinophils_gr = '".$_POST['eosinophils_grade']."',
                                            absolute_eosinophil = '".$_POST['absolute_eosinophil']."',
                                            absolute_eosinophil_gr = '".$_POST['absolute_eosinophil_grade']."',
                                            
                                            basophils = '".$_POST['basophils']."',
                                            basophils_gr = '".$_POST['basophils_grade']."',
                                            absolute_basophil = '".$_POST['absolute_basophil']."',
                                            absolute_basophil_gr = '".$_POST['absolute_basophil_grade']."', 
                                            
                                            rbc = '".$_POST['rbc']."',
                                            rbc_gr = '".$_POST['rbc_grade']."', 
                                            
                                            remark = '".$_POST['remark']."', 
                                            task = 'create',
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log 
     
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=Hemato");
    
}else{
echo PHPgourl('login.php');
}
?>