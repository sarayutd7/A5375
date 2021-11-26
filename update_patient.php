<?php
 // $_REQUEST['dob2'];
 $dob_explod = explode('/',$_REQUEST['dob2']);
 $dob = $dob_explod[2]."-".$dob_explod[1]."-".$dob_explod[0];
 //echo $dob;
 $update_data = "update patient set   patient_id = '".$_POST['pid']."',
                                      `gender` = '".$_POST['gender']."',
                                      `age` = '".$_POST['age']."',
                                      `weight` = '".$_POST['weight']."',
                                      `date_of_brith` = '".fixdate_formmat_patter($_POST['dob2'])."',
                                      `time_of_brith` = '".date('H:i', strtotime($_POST['dob_time']))."',
                                      `date_create` = '".$_POST['date_create']."',
                                      `create_by` = '".$_POST['create_by']."',
                                      `create_time` = '".$_POST['time_create']."',
                                      `create_byip`  = '".$_POST['ip']."',
                                      `day_register` = '".date('Y-m-d')."' 
                                      where id_register = '".$_POST['idredc']."'"; //exit();

update_data($update_data);

$log_data = "insert into patient_log set   patient_id = '".$_POST['pid']."',
                                      `gender` = '".$_POST['gender']."',
                                      `age` = '".$_POST['age']."',
                                      `weight` = '".$_POST['weight']."',
                                      `date_of_brith` = '".fixdate_formmat_patter($_POST['dob2'])."',
                                      `time_of_brith` = '".date('H:i', strtotime($_POST['dob_time']))."',
                                      `date_create` = '".$_POST['date_create']."',
                                      `create_by` = '".$_POST['create_by']."',
                                      `create_time` = '".$_POST['time_create']."', 
                                      `create_byip` = '".$_POST['create_by']."',
                                      `day_active` = '".date('Y-m-d')."'  "; //exit();

insert_data($log_data);

    echo PHPalert("บันทึกข้อมูลเรียบร้อยแล้ว");
    echo PHPgourl("index.php?pid=".$_POST['pid']."&task=findPID");

?>