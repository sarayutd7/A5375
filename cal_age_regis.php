<?php
ob_start();
session_start();
header('Content-Type: application/json');
include('conn/config.php');
include('conn/function.inc.php'); 
if($_SESSION['session_userid']!=''){ db_connect();
//-------------
  $sql = "select * from patient where patient_id = '".$_GET['pid']."'";
  $patient = get_a_line($sql); 
//-------------
   //------------- date of brith on db 
                                     
   //    $dob = $patient['date_of_brith']." ".$patient['time_of_brith']."";
   $dob = fixdate_formmat_patter($_GET['date_coll'])." ".$_GET['time_coll'].":00";
   //------------- date of brith on db  end 
    
                                    
    $date_start = date('Y-m-d H:i:s', strtotime($dob));  
    $today = date('Y-m-d H:i:s');
    $date_end =  date('Y-m-d H:i:s', strtotime($today)); //$datetime_coll
                                    
    $dayofyear = 365.25; 
    $remain=intval(strtotime($date_end)-strtotime($date_start));
    $year=floor($remain/(86400*$dayofyear));
    $month=floor($remain%(86400*$dayofyear)/30/86400);
    //---------------
    $dayfoall = $remain/(86400*$dayofyear); //floor($remain/86400);
    //-----------------
    $wan=floor($remain/86400%30);
    $l_wan=$remain%86400;
    $hour=floor($l_wan/3600);
    $l_hour=$l_wan%3600;
    $minute=floor($l_hour/60);
    $second=$l_hour%60; 
    
    //return "อายุ ".$year." ปี ".$month." เดือน ".$wan." วัน ".$hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";
   $value = array('year' => $year, 'month' => $month, 'day' => $wan, 'hour' => $hour, 'minute' => $minute, 'second' => $second,'dayfoall' => $dayfoall);
 echo json_encode($value);
    //echo $year;                                
                                   }
?>