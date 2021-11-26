<?php
  $inser_data = "insert into patient set patient_id = '".$_POST['pid']."',
                                      `gender` = '".$_POST['gender']."',
                                      `age` = '".$_POST['age']."',
                                      `weight` = '".$_POST['weight']."',
                                      `date_of_brith` = '".fixdate_formmat_patter($_POST['dob'])."',
                                      `time_of_brith` = '".date('H:i:s', strtotime($_POST['dob_time']))."',
                                      `premature` = '".$_POST['premature']."',
                                      `date_create` = '".$_POST['date_create']."',
                                      `create_by` = '".$_POST['create_by']."',
                                      `create_time` = '".$_POST['time_create']."',
                                      `create_byip`  = '".$_POST['ip']."',
                                      `day_register` = '".date('Y-m-d')."'";

insert_data($inser_data);  
$log_data = "insert into patient_log set   patient_id = '".$_POST['pid']."',
                                      `gender` = '".$_POST['gender']."',
                                      `age` = '".$_POST['age']."',
                                      `weight` = '".$_POST['weight']."',
                                      `date_of_brith` = '".fixdate_formmat_patter($_POST['dob'])."',
                                      `time_of_brith` = '".date('H:i', strtotime($_POST['dob_time']))."',
                                      `premature` = '".$_POST['premature']."',
                                      `date_create` = '".$_POST['date_create']."',
                                      `create_by` = '".$_POST['create_by']."',
                                      `create_time` = '".$_POST['time_create']."',
                                      `create_byip`  = '".$_POST['ip']."', 
                                      `day_active` = '".date('Y-m-d')."'  "; //exit();

insert_data($log_data);

    echo PHPalert("บันทึกข้อมูลเรียบร้อยแล้ว");
    echo PHPgourl('index.php?task=record');

?>