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
      $txt_dob = $patient['date_of_brith']." ".$patient['time_of_brith']."";
      $date_dob = date('Y-m-d H:i:s',  strtotime($txt_dob));

      $date_get = fixdate_formmat_patter($_GET['date_coll'])." ".$_GET['time_coll'].":00";
      $date_current = date('Y-m-d H:i:s', strtotime($date_get));
      /* */

      $year_dob = date("Y",strtotime($date_dob)); //$aad
      $month_dob = date("m",strtotime($date_dob)); //$mmd
      $date_dob = date("d",strtotime($date_dob)); //$jjd
      //----------------------------------------

      //----------------------------------------
      $year_current = date("Y",strtotime($date_current)); //$aaf
      $month_current = date("m",strtotime($date_current)); //$mmf
      $date_current = date("d",strtotime($date_current)); //$jjf


      /** จำนวนวันทั้งหมดที่ มีชีวิต **/
      $dayofyear = 365.25;
      $remain=intval(strtotime($date_get)-strtotime($txt_dob));
      $dayfoall = $remain/(86400*$dayofyear);


      $dem = array(0,31,28,31,30,31,30,31,31,30,31,30,31); //วันแต่ละเดือน Day of each month
      if(($year_current % 4)==0){$dem[2]=29;} //ปีอธิกสุรทิน
      if((($year_current % 100)==0)&(($year_current % 400)!=0)){$dem[2]=28;} //ปีอธิกสุรทิน

      if($date_current<$date_dob){ 
          $date_current = $date_current+$dem[(int)$month_current];
          $month_current = $month_current-1; 
      }
      if($month_current<$month_dob){ 
          $month_current = $month_current+12;
          $year_current = $year_current-1; 
       }
                                    
    //***************************************************                                
    $year = $year_current - $year_dob;
    $month = $month_current-$month_dob; 
    $wan = $date_current-$date_dob;
    //***************************************************
    
    $l_wan=$remain%86400;
    $hour=floor($l_wan/3600);
    $l_hour=$l_wan%3600;
    $minute=floor($l_hour/60);
    $second=$l_hour%60; 
    
    //return "อายุ ".$year." ปี ".$month." เดือน ".$wan." วัน ".$hour." ชั่วโมง ".$minute." นาที ".$second." วินาที";
   $value = array('year' => $year, 'month' => $month, 'day' => $wan, 'hour' => $hour, 'minute' => $minute, 'second' => $second,'dayfoall' => $dayfoall);
echo json_encode($value);
   }
?> 