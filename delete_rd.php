<?php
ob_start();
session_start();
include('conn/config.php');
include('conn/function.inc.php'); 
if($_SESSION['session_userid']!=''){ db_connect();
       $patient = get_a_line("select * from patient where id_register = '".$_GET['p']."'");
       $patient_id = $patient['patient_id'];                          
                                    
       delete("cd4","where ptid = '$patient_id'");
       delete("chem","where ptid = '$patient_id'");
       delete("ctng","where ptid = '$patient_id'");
       delete("hemato","where ptid = '$patient_id'");
       delete("hepatitis","where ptid = '$patient_id'");
                                    
       delete("hiv","where ptid = '$patient_id'");
       //delete("hiv_con","where ptid = '$patient_id'");
       delete("hiv_eia","where ptid = '$patient_id'");
       delete("hiv_rna","where ptid = '$patient_id'");
       //delete("hiv_sero","where ptid = '$patient_id'"); 
                                    
       delete("syphilis","where ptid = '$patient_id'");
       delete("urine","where ptid = '$patient_id'");
       delete("urinepregnancy","where ptid = '$patient_id'");
                                    
  delete("patient","where id_register = '".number_format($_GET['p'])."'");
                                   }
echo PHPgourl("index.php?task=showall");
                                    ?>
                                    