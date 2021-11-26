<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php');
echo "<meta charset=\"UTF-8\">";
if($_SESSION['session_userid']!=''){ 
    db_connect(); 
    
    $insert_sql = "insert into chem set ptid = '".$_POST['pid']."',
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
                                            
                                            fasting = '".$_POST['Fasting']."',
                                            weight = '".$_POST['Weight']."',
                                            
                                            creatinine = '".setnumber($_POST['creatinine'])."',
                                            creatinine_gr = '".$_POST['creatinine_grade']."',
                                            
                                            creatinine_clearance = '".setnumber($_POST['creatinine_clearance'])."',
                                            creatinine_clearance_gr = '".$_POST['creatinine_clearance_grade']."',
                                            
                                            bun = '".$_POST['bun']."',
                                            bun_gr = '".$_POST['bun_grade']."',
                                            alkaline_phosphatase = '".$_POST['alkaline_phosphatase']."',
                                            alkaline_phosphatase_gr = '".$_POST['alkaline_phosphatase_grade']."',
                                            
                                            albumin  = '".$_POST['albumin']."',
                                            albumin_gr = '".$_POST['albumin_grade']."',
                                            sodium = '".$_POST['sodium']."',
                                            sodium_gr = '".$_POST['sodium_grade']."',
                                            potassium = '".$_POST['potassium']."',
                                            potassium_gr = '".$_POST['potassium_grade']."',
                                            bicarbonate = '".$_POST['bicarbonate']."',
                                            bicarbonate_gr = '".$_POST['bicarbonate_grade']."',
                                            phosphorus = '".$_POST['phosphorus']."',
                                            phosphorus_gr = '".$_POST['phosphorus_grade']."',
                                            
                                            direct_bilirubin = '".$_POST['direct_bilirubin']."',
                                            direct_bilirubin_gr = '".$_POST['direct_bilirubin_grade']."',
                                            
                                            chloride = '".$_POST['chloride']."', 
                                            chloride_gr = '".$_POST['chloride_grade']."', 
                                            
                                            ast = '".$_POST['ast']."',
                                            ast_gr = '".$_POST['ast_grade']."',
                                            alt = '".$_POST['alt']."',
                                            alt_gr = '".$_POST['alt_grade']."',
                                            
                                            total_bilirubin = '".$_POST['total_bilirubin']."',
                                            total_bilirubin_gr = '".$_POST['total_bilirubin_grade']."', 
                                            
                                            glucose = '".$_POST['glucose']."',
                                            glucose_gr = '".$_POST['glucose_grade']."', 
                                            lipase = '".$_POST['lipase']."',
                                            lipase_gr = '".$_POST['lipase_grade']."', 
                                            
                                            cholesterol = '".$_POST['cholesterol']."',
                                            cholesterol_gr = '".$_POST['cholesterol_grade']."',
                                            
                                            triglyceride = '".$_POST['triglyceride']."',
                                            triglyceride_gr = '".$_POST['triglyceride_grade']."',  
                                            hdl = '".$_POST['hdl']."',
                                            hdl_gr = '".$_POST['hdl_grade']."',
                                            ldl = '".$_POST['ldl']."',
                                            ldl_gr = '".$_POST['ldl_grade']."',
                                             
                                            remark = '".$_POST['remark']."', 
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_sql);
    //--------------------------- log
    $insert_log = "insert into chem_log set ptid = '".$_POST['pid']."',
                                            visit_code = '".$_POST['visit_code']."',
                                            date_coll = '".fixdate_formmat_patter($_POST['date_coll'])."',
                                            time_coll = '".$_POST['time_coll']."',
                                            date_received = '".fixdate_formmat_patter($_POST['date_recei'])."',
                                            time_received = '".$_POST['time_recei']."',
                                            date_assayed = '".fixdate_formmat_patter($_POST['date_assay'])."',
                                            time_assayed = '".$_POST['time_assay']."',
                                            
                                            gender = '".$_POST['gender']."',
                                            age = '".$_POST['ages']."',
                                            fasting = '".$_POST['Fasting']."',
                                            weight = '".$_POST['Weight']."',
                                            
                                            creatinine = '".$_POST['creatinine']."',
                                            creatinine_gr = '".$_POST['creatinine_grade']."',
                                            bun = '".$_POST['bun']."',
                                            bun_gr = '".$_POST['bun_grade']."',
                                            alkaline_phosphatase = '".$_POST['alkaline_phosphatase']."',
                                            alkaline_phosphatase_gr = '".$_POST['alkaline_phosphatase_grade']."',
                                            
                                            albumin  = '".$_POST['albumin']."',
                                            albumin_gr = '".$_POST['albumin_grade']."',
                                            sodium = '".$_POST['sodium']."',
                                            sodium_gr = '".$_POST['sodium_grade']."',
                                            potassium = '".$_POST['potassium']."',
                                            potassium_gr = '".$_POST['potassium_grade']."',
                                            bicarbonate = '".$_POST['bicarbonate']."',
                                            bicarbonate_gr = '".$_POST['bicarbonate_grade']."',
                                            phosphorus = '".$_POST['phosphorus']."',
                                            phosphorus_gr = '".$_POST['phosphorus_grade']."',
                                            direct_bilirubin = '".$_POST['direct_bilirubin']."',
                                            direct_bilirubin_gr = '".$_POST['direct_bilirubin_grade']."',
                                            
                                            ast = '".$_POST['ast']."',
                                            ast_gr = '".$_POST['ast_grade']."',
                                            alt = '".$_POST['alt']."',
                                            alt_gr = '".$_POST['alt_grade']."',
                                            
                                            total_bilirubin = '".$_POST['total_bilirubin']."',
                                            total_bilirubin_gr = '".$_POST['total_bilirubin_grade']."',  
                                            
                                            glucose = '".$_POST['glucose']."',
                                            glucose_gr = '".$_POST['glucose_grade']."', 
                                            lipase = '".$_POST['lipase']."',
                                            lipase_gr = '".$_POST['lipase_grade']."', 
                                            
                                            chloride = '".$_POST['chloride']."', 
                                            chloride_gr = '".$_POST['chloride_grade']."', 
                                            
                                            cholesterol = '".$_POST['cholesterol']."',
                                            cholesterol_gr = '".$_POST['cholesterol_grade']."',
                                            
                                            triglyceride = '".$_POST['triglyceride']."',
                                            triglyceride_gr = '".$_POST['triglyceride_grade']."',  
                                            hdl = '".$_POST['hdl']."',
                                            hdl_gr = '".$_POST['hdl_grade']."',
                                            ldl = '".$_POST['ldl']."',
                                            ldl_gr = '".$_POST['ldl_grade']."',
                                            
                                            remark = '".$_POST['remark']."', 
                                            task = 'create',
                                            who_record = '".$_SESSION['session_user']."',
                                            date_record = '".date('Y-m-d H:i:s')."' ";
    insert_data($insert_log);
    //--------------------------- end log 
    
    echo PHPalert('บันทึกข้อมูลเรียบร้อย');
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID&tab=Chemis");
    
}else{
echo PHPgourl('login.php');
}
?>